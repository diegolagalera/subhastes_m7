<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role = Role::create(['name'=>'administrador']);
      $role->givePermissionTo('destroy_lisitacions','edit_lisitacions','create_lisitacions','comment_lisitacions','Administer roles y permissions');

      $role = Role::create(['name'=>'user']);
      $role->givePermissionTo('create_lisitacions');

      // DB::table('rols')->insert([
      // [
      // 'nom'  => 'administrador'
      // ],
      // [
      // 'nom'  => 'user'
      // ]
      // ]);




    }
}
