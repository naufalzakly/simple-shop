<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = [
        'nama_makanan',
        'kategori_makanan',
        'stok',
        'harga',
        'photo',
    ];
}