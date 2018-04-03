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
        'nom'=>'Taula',
        'descripcio'=>'desc2',
        'caracteristiques'=>'car2',
        'imatge'=>'',
      ]);
      articles::create([
        'nom'=>'Cadira',
        'descripcio'=>'desc1',
        'caracteristiques'=>'car1',
        'imatge'=>'',
      ]);


    }
}
