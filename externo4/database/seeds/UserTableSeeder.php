<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_user = Role::where('name','user')->first();
    $role_admin = Role::where('name','admin')->first();

    $user = new User();
    $user->name = "User";
    $user->apellido = "super";
    $user->usuario = "user";
    $user->email = "user@gmail.com";
    $user->telefono = "3243434";
    $user->celular = "324454";
    $user->domicilio = "pinozuares#33";
    $user->codigoPostal = "28400";
    //$user->rol = "user";
    $user->password = bcrypt('query');
    $user->save();
    $user->roles()->attach($role_user);

    $user = new User();
    $user->name = "Admin";
    $user->apellido = "super";
    $user->usuario = "admin";
    $user->email = "admin@gmail.com";
    $user->telefono = "2332423";
    $user->celular = "844462";
    $user->domicilio = "hidalgo#199";
    $user->codigoPostal = "2800";
    //$user->rol = "admin";
    $user->password = bcrypt('query');
    $user->save();
    $user->roles()->attach($role_admin);

    $user = new User();
    $user->name = "cesar";
    $user->apellido = "perez";
    $user->usuario = "cesar12";
    $user->email = "cesar@gmail.com";
    $user->telefono = "39898989";
    $user->celular = "3452845544";
    $user->domicilio = "pinozuares#335";
    $user->codigoPostal = "2888";
    //$user->rol = "user";
    $user->password = bcrypt('query');
    $user->save();
    $user->roles()->attach($role_user);

    $user = new User();
    $user->name = "Abel";
    $user->apellido = "perez";
    $user->usuario = "abel12";
    $user->email = "abel@gmail.com";
    $user->telefono = "34448989";
    $user->celular = "3455545544";
    $user->domicilio = "pinozuares#445";
    $user->codigoPostal = "2444";
    //$user->rol = "user";
    $user->password = bcrypt('query');
    $user->save();
    $user->roles()->attach($role_user);
    }
}
