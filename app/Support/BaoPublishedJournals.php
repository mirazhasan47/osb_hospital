<?php

namespace App\Support;

class BaoPublishedJournals
{
    private const FILENAME = 'bao_published_journal_ids.json';

    public static function storagePath(): string
    {
        return storage_path('app/'.self::FILENAME);
    }

    /**
     * @return array<int>|null Null if no whitelist (all journals public). Non-null array = only these IDs are visible.
     */
    public static function getRestrictedIds(): ?array
    {
        $path = self::storagePath();
        if (! is_file($path)) {
            return null;
        }

        $raw = json_decode((string) file_get_contents($path), true);
        if (! is_array($raw) || ! isset($raw['ids']) || ! is_array($raw['ids'])) {
            return null;
        }

        $ids = array_values(array_unique(array_map('intval', $raw['ids'])));

        // Empty list = unrestricted (legacy saves wrote {"ids":[]} which hid every journal).
        if ($ids === []) {
            unlink($path);

            return null;
        }

        return $ids;
    }

    public static function isVisibleToPublic(int $journalId): bool
    {
        $ids = self::getRestrictedIds();
        if ($ids === null) {
            return true;
        }

        return in_array($journalId, $ids, true);
    }

    /**
     * @param  array<int>  $ids
     */
    public static function setPublishedIds(array $ids): void
    {
        $ids = array_values(array_unique(array_filter(array_map('intval', $ids))));
        $path = self::storagePath();
        if ($ids === []) {
            if (is_file($path)) {
                unlink($path);
            }

            return;
        }

        $json = json_encode(['ids' => $ids], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
        file_put_contents($path, $json, LOCK_EX);
    }

    /**
     * When a whitelist exists, add a new journal so uploads appear without another admin publish.
     */
    public static function appendPublishedIdIfRestricted(int $journalId): void
    {
        $ids = self::getRestrictedIds();
        if ($ids === null) {
            return;
        }
        if (in_array($journalId, $ids, true)) {
            return;
        }
        $ids[] = $journalId;
        self::setPublishedIds($ids);
    }
}
