<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // MENGATUR HANYA COLUMN ID YANG TIDAK BOLEH DI ISI

    /*-------RELASI ANTAR TABLE-------*/
    //RELASI DARI MODEL USER KE PEMINJAMAN
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //RELASI DARI MODEL BUKU KE PEMINJAMAN
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
