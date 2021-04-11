<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Fone de Ouvido',
            'quantity' => '3',
            'description' => 'Fone de ouvido sem fio com peça de reposição, supremo muita do bom mesmo daquele que não arrepende',
            'brand' => 'DaEsquina',
            'price' => '29.90',
            'category_id' => 3,
            'photo' => 'https://static.netshoes.com.br/produtos/fone-de-ouvido-head-phone-jbl-duet-bt/64/N26-0286-064/N26-0286-064_zoom2.jpg?ts=1599156903&?ims=544x',
        ]);
        DB::table('products')->insert([
            'name' => 'Tênis amarelo',
            'quantity' => '10',
            'description' => 'Esse é daquele tenis que você pode andar para caramba que nunca vai acabar e não deve destruir o caso.',
            'brand' => 'TenisTop',
            'price' => '99.00',
            'category_id' => 3,
            'photo' => 'https://static.netshoes.com.br/produtos/tenis-adidas-advantage-base-feminino/40/NQQ-0064-040/NQQ-0064-040_zoom1.jpg?ts=1602062285&ims=544x'
        ]);
        DB::table('products')->insert([
            'name' => 'Fone de Ouvido',
            'quantity' => '3',
            'description' => 'Fone de ouvido sem fio com peça de reposição, supremo muita do bom mesmo daquele que não arrepende',
            'brand' => 'DaEsquina',
            'price' => '29.90',
            'category_id' => 3,
            'photo' => 'https://static.netshoes.com.br/produtos/fone-de-ouvido-head-phone-jbl-duet-bt/64/N26-0286-064/N26-0286-064_zoom2.jpg?ts=1599156903&?ims=544x',
        ]);
        DB::table('products')->insert([
            'name' => 'Tênis amarelo',
            'quantity' => '10',
            'description' => 'Esse é daquele tenis que você pode andar para caramba que nunca vai acabar e não deve destruir o caso.',
            'brand' => 'TenisTop',
            'price' => '99.00',
            'category_id' => 3,
            'photo' => 'https://static.netshoes.com.br/produtos/tenis-adidas-advantage-base-feminino/40/NQQ-0064-040/NQQ-0064-040_zoom1.jpg?ts=1602062285&ims=544x'
        ]);
        DB::table('products')->insert([
            'name' => 'Fone de Ouvido',
            'quantity' => '3',
            'description' => 'Fone de ouvido sem fio com peça de reposição, supremo muita do bom mesmo daquele que não arrepende',
            'brand' => 'DaEsquina',
            'price' => '29.90',
            'category_id' => 3,
            'photo' => 'https://static.netshoes.com.br/produtos/fone-de-ouvido-head-phone-jbl-duet-bt/64/N26-0286-064/N26-0286-064_zoom2.jpg?ts=1599156903&?ims=544x',
        ]);
        DB::table('products')->insert([
            'name' => 'Tênis amarelo',
            'quantity' => '10',
            'description' => 'Esse é daquele tenis que você pode andar para caramba que nunca vai acabar e não deve destruir o caso.',
            'brand' => 'TenisTop',
            'price' => '99.00',
            'category_id' => 3,
            'photo' => 'https://static.netshoes.com.br/produtos/tenis-adidas-advantage-base-feminino/40/NQQ-0064-040/NQQ-0064-040_zoom1.jpg?ts=1602062285&ims=544x'
        ]);
    }
}
