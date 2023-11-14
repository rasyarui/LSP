<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku3 extends Model
{
    use HasFactory;

    protected $fillable =[
        'image','judul','tanggal','deskripsi'
    ];
}
