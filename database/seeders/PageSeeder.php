<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug' => 'banner-title',
            'objective' => 'Título do banner principal da página',
            'value' => 'Seja Bem Vinda',
        ]);
        DB::table('pages')->insert([
            'slug' => 'banner-text',
            'objective' => 'Parágrafo do banner principal da página',
            'value' => 'Cotidiano, poesia, reflexões, crônicas e o que mais der na telha. Seja bem-vindo =)',
        ]);
        DB::table('pages')->insert([
            'slug' => 'footer',
            'objective' => 'Texto para ser exibido no Footer',
            'value' => 'Puc Minas - Tcc - <a href="https://www.linkedin.com/in/felipe-de-almeida-6b1855104/">Felipe de Almeida</a>.',
        ]);
    }
}
