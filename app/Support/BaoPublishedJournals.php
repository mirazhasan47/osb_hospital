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
     * @return array<int>|null Null if no config file yet (all journals public). Empty array if file exists but none selected.
     */
    public static function getRestrictedIds(): ?array
    {
        $path = self::storagePath();
        if (! is_file($path)) {
            return null;
        }

        $raw = json_decode((string) file_get_contents($path), true);
        if (! is_array($raw) || ! isset($raw['ids']) || ! is_array($raw['ids'])) {
            return [];
        }

        return array_values(array_unique(array_map('intval', $raw['ids'])));
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
        $json = json_encode(['ids' => $ids], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
        file_put_contents(self::storagePath(), $json, LOCK_EX);
    }
}
