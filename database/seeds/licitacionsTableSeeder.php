<?php
use App\Lisitacio;
use Illuminate\Database\Seeder;

class licitacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Lisitacio::create([
        'id_usuari'=>1,
        'id_subhasta'=>4,
        'preu'=>2,
        'temps'=>'2018-04-18 19:50:00',
        'guanyador'=>3,
      ]);
      Lisitacio::create([
        'id_usuari'=>1,
        'id_subhasta'=>1,
        'preu'=>0.5,
        'temps'=>'2018-04-20 19:00:00',
        'guanyador'=>2,
      ]);
      Lisitacio::create([
        'id_usuari'=>1,
        'id_subhasta'=>2,
        'preu'=>0.5,
        'temps'=>'2018-04-20 19:00:01',
        'guanyador'=>9,
      ]);
      Lisitacio::create([
        'id_usuari'=>2,
        'id_subhasta'=>1,
        'preu'=>1,
        'temps'=>'2018-04-20 20:00:00',
        'guanyador'=>1,
      ]);
      Lisitacio::create([
        'id_usuari'=>2,
        'id_subhasta'=>2,
        'preu'=>0.5,
        'temps'=>'2018-04-20 21:00:00',
        'guanyador'=>9,
      ]);
      Lisitacio::create([
        'id_usuari'=>2,
        'id_subhasta'=>3,
        'preu'=>0.8,
        'temps'=>'2018-04-20 19:30:00',
        'guanyador'=>2,
      ]);
      Lisitacio::create([
        'id_usuari'=>2,
        'id_subhasta'=>4,
        'preu'=>0.8,
        'temps'=>'2018-04-18 19:30:00',
        'guanyador'=>1,
      ]);
    }
}
