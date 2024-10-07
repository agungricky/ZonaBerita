<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_populer extends Model
{
    use HasFactory;
    protected $table = 'berita_populer';
    protected $fillable = ['postingan_idpostingan'];
}
