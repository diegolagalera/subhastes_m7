<?php

use Illuminate\Database\Seeder;
use App\articles;
class articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      articles::create([
        'nom'=> 'Taula',
        'descripcio'=> 'Taula',
        'caracteristiques'=> 'Taula',
        'imatge'=> '',

      ]);

    }
}