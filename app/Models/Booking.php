<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'tb_jenis_penyewaan';
    protected $primaryKey = 'id_jenis_penyewaan';
    protected $fillable = ['nama_jenis','harga_sewa','gambar'];
    public $timestamps = false;
    
}
