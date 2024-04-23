<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'datasiswa';
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'sekolah',
        'alamat'
    ];
}
