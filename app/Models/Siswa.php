<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;
    protected $table = 'siswa';

    protected $fillable = [
        'jurusan_id', 'nama_lengkap', 'ttl', 'jenis_kelamin', 'agama', 'alamat', 'gambar'
    ];

    protected $hidden = [];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
