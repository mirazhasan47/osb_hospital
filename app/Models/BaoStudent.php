<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaoStudent extends Model
{
    protected $table = 'bao_students';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'institute_name',
        'designation',
    ];
}
