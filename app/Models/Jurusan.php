<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'siswa_id', 'jurusan'
    ];

    protected $hidden = [];
}
