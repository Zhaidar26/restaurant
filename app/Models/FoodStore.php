<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodStore extends Model
{
    protected $table = 'foodstore';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_produk', 'deskripsi', 'harga'];
}
