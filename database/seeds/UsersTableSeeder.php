<?php

use Illuminate\Database\Seeder;
use App\User;
use APP\Post;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
        'name'  => 'Administrador',
        'surname'  => 'Administrador',
        'dni'  => '47484339',
        'country'  => 'Spain',
        'cp'  => '43515',
        'city'  => 'Amposta',
        'tel'  => '977719343',
        'email'  => 'administrador@gmail.com',
        'password'  => bcrypt('123456'),
        'email_token' => base64_encode('tokendelemail'),
        'active'  => '1',
        'verified'  => '1',
        'id_rol'  => '0'
      ]);
      $user->assignRole('administrador');

      $user = User::create([
        'name'  => 'user',
        'surname'  => 'user',
        'dni'  => '47484339',
        'country'  => 'Spain',
        'cp'  => '43515',
        'city'  => 'Amposta',
        'tel'  => '977719343',
        'email'  => 'user@gmail.com',
        'password'  => bcrypt('123456'),
        'email_token' => base64_encode('tokendelemail'),
        'active'  => '1',
        'verified'  => '1',
        'id_rol'  => '1'
      ]);
      $user->assignRole('user');


    //   DB::table('users')->insert([
    //   [
    //   'nom'  => 'Administrador',
    //   'cognom'  => 'Administrador',
    //   'dni'  => '47484339',
    //   'pais'  => 'Spain',
    //   'codi_postal'  => '43515',
    //   'ciutat'  => 'Amposta',
    //   'telefon'  => '977719343',
    //   'email'  => 'administrador@gmail.com',
    //   'password'  => bcrypt('123456'),
    //   'email_token' => base64_encode('tokendelemail'),
    //   'active'  => '1',
    //   'verified'  => '1',
    //   'id_rol'  => '0'
    // ],
    // [
    //   'nom'  => 'user',
    //   'cognom'  => 'user',
    //   'dni'  => '47484339',
    //   'pais'  => 'Spain',
    //   'codi_postal'  => '43515',
    //   'ciutat'  => 'Amposta',
    //   'telefon'  => '977719343',
    //   'email'  => 'user@gmail.com',
    //   'password'  => bcrypt('123456'),
    //   'email_token' => base64_encode('tokendelemail'),
    //   'active'  => '1',
    //   'verified'  => '1',
    //   'id_rol'  => '1'
    // ]
  // ]);


    }
}
