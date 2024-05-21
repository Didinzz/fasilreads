<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable =  ['nama_buku','nama_peminjamn', 'nim', 'tanggal_mulai', 'tanggal_selesai','gambar'];

    public function user(){
        return $this->hasMany(peminjaman::class, 'nim');
    }
}
