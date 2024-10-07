<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten_beritacepat extends Model
{
    use HasFactory;
    protected $table = 'konten_beritacepat';
    protected $fillable = ['Kategori_idKategori'];
}
