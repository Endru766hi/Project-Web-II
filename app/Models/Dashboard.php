<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $table = 'tb_lapangan';
    protected $primaryKey = 'id_lapangan';
    protected $fillable = ['no_lapangan','tipe_lapangan','harga_sewa','gambar'];
}
