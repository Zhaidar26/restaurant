<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodStore;

class Store extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FoodStore::create(['nama_produk' => 'Tall Klassy Bread', 'deskripsi' => 'lorem ipsum', 'harga' => 'Rp 20.000']);
    }
}
