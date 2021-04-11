<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 5; $i++) {
            DB::table('books')->insert([
                'name' => 'O Livro de Eli',
                'author' => 'O Próprio Eli?',
                'description' => 'Fala sobre a jornada do meu grande jovem pegue o livro',
                'photo' => 'https://www.revistabula.com/wp/wp-content/uploads/2016/01/Livros-610x350.jpg',
                'category_id' => '4'
            ]);
            DB::table('books')->insert([
                'name' => 'Romance dos vampiros',
                'author' => 'O mais antigo Vampiro',
                'description' => 'O vampiro queria namorar outro vampiro no mundo dos vampiros que mordem as pessoas',
                'photo' => 'https://www.revistabula.com/wp/wp-content/uploads/2016/01/Livros-610x350.jpg',
                'category_id' => '4'
            ]);
            DB::table('books')->insert([
                'name' => 'A volta dos que não foram',
                'author' => 'Alguém que não foi',
                'description' => 'Mostra a volta em um situação em que os personagens da narrativa nem chegaram a ir, incrível não?',
                'photo' => 'https://www.revistabula.com/wp/wp-content/uploads/2016/01/Livros-610x350.jpg',
                'category_id' => '5'
            ]);
            DB::table('books')->insert([
                'name' => 'Biografia de alguém',
                'author' => 'Eu de Almeida',
                'description' => 'Fala sobre a vida chata de uma pessoa que me pagou para escrever sobre ela',
                'photo' => 'https://www.revistabula.com/wp/wp-content/uploads/2016/01/Livros-610x350.jpg',
                'category_id' => '5'
            ]);
        }
    }
}
