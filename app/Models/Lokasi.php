<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table ='lokasi';
    protected $id = 'id';

    protected $fillable = ['nama_lokasi','koordinat','jenis','sekolah'];
    public $timestamps = false;
}
