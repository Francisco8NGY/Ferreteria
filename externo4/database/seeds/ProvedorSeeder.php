<?php

use Illuminate\Database\Seeder;
use App\Provedores;

class ProvedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Provedores = new provedores();
          $Provedores->name = "Cenron";
          $Provedores->telefono = "3159963";
          $Provedores->direccion = " 	CALLE AGUSTIN LARA NO. 69B";
          $Provedores->codigoPostal = "28017";
          $Provedores->email = "cenron@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Entomik";
          $Provedores->telefono = "3336985";
          $Provedores->direccion = " 	AV. INDEPENDENCIA NO. 241";
          $Provedores->codigoPostal = "27415";
          $Provedores->email = "entomik@hotmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Autoics";
          $Provedores->telefono = "3168895";
          $Provedores->direccion = "AV. 20 DE NOVIEMBRE NO. 1060";
          $Provedores->codigoPostal = "26347";
          $Provedores->email = "autoics@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Cononet";
          $Provedores->telefono = "3156641";
          $Provedores->direccion = "BLVD. BENITO JUAREZ NO. 1466-A";
          $Provedores->codigoPostal = "24689";
          $Provedores->email = "cononetsec@hotmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Amsoft";
          $Provedores->telefono = "3153472";
          $Provedores->direccion = "AV. INDEPENDENCIA NO. 748";
          $Provedores->codigoPostal = "55897";
          $Provedores->email = "amsoft@hotmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Viaat";
          $Provedores->telefono = "3150359";
          $Provedores->direccion = "CALLE IGNACIO RAYON NO.949";
          $Provedores->codigoPostal = "89621";
          $Provedores->email = "viaatgb@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Polyata";
          $Provedores->telefono = "3154409";
          $Provedores->direccion = "CALLE OCAMPO NO. 254";
          $Provedores->codigoPostal = "33659";
          $Provedores->email = "polyatagmp@hotmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Ultraparthners";
          $Provedores->telefono = "3138864";
          $Provedores->direccion = " 	CALLE BENITO JUAREZ NO.495";
          $Provedores->codigoPostal = "78413";
          $Provedores->email = "ultrapar@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Volteck";
          $Provedores->telefono = "31232055";
          $Provedores->direccion = "Bahia";
          $Provedores->codigoPostal = "28400";
          $Provedores->email = "volteck@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Foset";
          $Provedores->telefono = "33125548";
          $Provedores->direccion = "Manzanillo 12";
          $Provedores->codigoPostal = "28200";
          $Provedores->email = "Foset@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Trupper";
          $Provedores->telefono = "331255487";
          $Provedores->direccion = "Lopez 132";
          $Provedores->codigoPostal = "28223";
          $Provedores->email = "Trupper@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Hermex";
          $Provedores->telefono = "331255888";
          $Provedores->direccion = "Constitucion 412";
          $Provedores->codigoPostal = "28700";
          $Provedores->email = "Hermex@gmail.com";
          $Provedores->save();

          $Provedores = new provedores();
          $Provedores->name = "Fiero";
          $Provedores->telefono = "333255888";
          $Provedores->direccion = "Carranza 412";
          $Provedores->codigoPostal = "28799";
          $Provedores->email = "Fiero@gmail.com";
          $Provedores->save();
    }
}
