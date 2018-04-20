<?php
use App\Subhasta;
use Illuminate\Database\Seeder;

class SubhastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subhasta::create([
          'id_article'=>'1',
          'preu_venta'=>'300',
          'actiu'=>'1',
          'data'=>'2018-04-30 20:24:57'
        ]);
        Subhasta::create([
        'id_article'=>'2',
        'preu_venta'=>'400',
        'actiu'=>'1',
        'data'=>'2018-04-23 18:30:00'
      ]);
      Subhasta::create([
      'id_article'=>'3',
      'preu_venta'=>'25',
      'actiu'=>'1',
      'data'=>'2018-04-24 19:00:00'
      ]);
      Subhasta::create([
      'id_article'=>'4',
      'preu_venta'=>'200',
      'actiu'=>'1',
      'data'=>'2018-04-19 19:00:00'
      ]);
    }
}
