<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'tb_penyewaan';
    protected $primaryKey = 'id_penyewaan';
    protected $fillable = ['id','id_lapangan','no_lapangan','tipe_lapangan','harga_sewa','tanggal_sewa','total_waktu'];
}
