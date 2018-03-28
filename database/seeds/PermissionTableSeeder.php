<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Permission::create(['name'=>'Administer roles y permissions']);
      Permission::create(['name'=>'destroy_lisitacions']);
      Permission::create(['name'=>'edit_lisitacions']);
      Permission::create(['name'=>'create_lisitacions']);
      Permission::create(['name'=>'comment_lisitacions']);

      // DB::table('rols')->insert(
      // [
      // 'name'  => 'destroy_lisitacions'
      // ]);

        //
    }
}
