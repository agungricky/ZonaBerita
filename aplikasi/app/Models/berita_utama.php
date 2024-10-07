<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita_utama extends Model
{
    use HasFactory;
    protected $table = 'berita_utama';
    protected $fillable = ['postingan_idpostingan'];
}
