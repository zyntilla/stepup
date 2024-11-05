<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    // use HasFactory;
    protected $table = 'penggunas';
    protected $fillable = [
        'tanggal_faktur', 
        'nomor_faktur', 
        'no_npwp', 
        'supplier', 
        'keterangan', 
        'jumlah_pembelian', 
        'ppn', 
        'total_tagihan', 
        'created_at', 
        'updated_at'
    ];
}
