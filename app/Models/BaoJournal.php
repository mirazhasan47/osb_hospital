<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaoJournal extends Model
{
    protected $table = 'bao_journals';

    protected $fillable = [
        'title',
        'original_filename',
        'file_path',
    ];
}
