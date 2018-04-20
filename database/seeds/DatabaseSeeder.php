<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PermissionTableSeeder::class);
      $this->call(RoleTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(articlesTableSeeder::class);
      $this->call(CategoriesTableSeeder::class);
      $this->call(categorieszarticlesTableSeeder::class);
      $this->call(SubhastesTableSeeder::class);
      $this->call(licitacionsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
