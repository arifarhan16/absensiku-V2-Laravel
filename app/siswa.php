<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $fillable = ['nama','kelas','hari','tanggal','bulan','tahun','kehadiran'];
}
