<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Categoria::create([
        'nom'=> 'Informàtica',
        'descripcio'=> 'Categoria de Informàtica',
      ]);
      Categoria::create([
        'nom'=> 'Fotografia',
        'descripcio'=> 'Categoria de Fotografia',
      ]);
      Categoria::create([
        'nom'=> 'Consoles i jocs',
        'descripcio'=> 'Categoria de Consoles i jocs',
      ]);
      Categoria::create([
        'nom'=> 'Imatge i so',
        'descripcio'=> 'Categoria de Imatge i so',
      ]);
      Categoria::create([
        'nom'=> 'Telefonia',
        'descripcio'=> 'Categoria de Telefonia',
      ]);
      Categoria::create([
        'nom'=> 'Gran electrodomèstic',
        'descripcio'=> 'Categoria de Gran electrodomèstic',
      ]);
      Categoria::create([
        'nom'=> 'Petit electrodomèstic',
        'descripcio'=> 'Categoria de Petits electrodomèstic',
      ]);
    }
}
