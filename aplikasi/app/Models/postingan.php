<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postingan extends Model
{
    use HasFactory;
    protected $table = 'postingan';
    protected $fillable = ['idpostingan', 'Judul', 'foto', 'Konten', 'Status', 'Vidio', 'View', 'Created_at', 'Updated_at', 'Sub_kategori_idSub_kategori'];
}
