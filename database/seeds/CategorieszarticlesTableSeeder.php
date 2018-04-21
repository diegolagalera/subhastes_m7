<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategorieszarticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories_articles')
      ->insert([
        ['id_categoria'=>1,'id_article'=>1],
        ['id_categoria'=>3,'id_article'=>1],
        ['id_categoria'=>6,'id_article'=>2],
        ['id_categoria'=>1,'id_article'=>3],
        ['id_categoria'=>3,'id_article'=>3],
        ['id_categoria'=>4,'id_article'=>3],
        ['id_categoria'=>1,'id_article'=>4],
        ['id_categoria'=>2,'id_article'=>4],
        ['id_categoria'=>4,'id_article'=>4],
        ['id_categoria'=>7,'id_article'=>4]]);
    }
}
