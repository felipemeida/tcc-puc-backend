<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'id' => 1,
                'name' => 'Felipe Almeida',
                'email' => 'felipe@fourup.com.br',
                'summary' => 'Programador Nerd e muitas coisinhas mais e mais -> resumo do usuário para exemplificar',
                'photo' => 'https://br.web.img2.acsta.net/r_640_360/newsv7/19/10/04/01/13/5346274.jpg',
                'password' => Hash::make('fel12345'),
            ]
        );
        User::create(
            [
                'id' => 2,
                'name' => 'Janine Martins',
                'email' => 'janinegmartins@gmail.com',
                'summary' => 'Jornalista escritora, muita coisas mais e mais -> resumo do usuário para exemplificar. Atua com social mídia desde bla chuta escreve algo render para completar mais de uma linha com algum texto que possa fazer sentido',
                'photo' => 'https://publicdomainvectors.org/photos/female-user-icon.png',
                'password' => Hash::make('fel12345'),
            ]
        );
    }
}
