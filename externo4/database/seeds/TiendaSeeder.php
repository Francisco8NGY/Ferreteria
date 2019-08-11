
<?php

use Illuminate\Database\Seeder;
use App\Tienda;
class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Tienda 1
          $Tienda = new Tienda();
          $Tienda->name = "Sucursal 1";
          $Tienda->telefono = "31391101";
          $Tienda->direccion = "Av 20 de Noviembre 323. Centro";
          $Tienda->codigoPostal = "28095";
          $Tienda->save();
          //Tienda 2
          $Tienda = new Tienda();
          $Tienda->name = "Sucursal 2";
          $Tienda->telefono = "31263662";
          $Tienda->direccion = "Av 3r Anillo Periferico 365.";
          $Tienda->codigoPostal = "28017";
          $Tienda->save();
          //Tienda 3
          $Tienda = new Tienda();
          $Tienda->name = "Sucursal 3";
          $Tienda->telefono = "31477763";
          $Tienda->direccion = "Av. Niños Heroes 1420,La Estancia.";
          $Tienda->codigoPostal = "28078";
          $Tienda->save();
          //Tienda 4
          $Tienda = new Tienda();
          $Tienda->name = "Sucursal 4";
          $Tienda->telefono = "313911045";
          $Tienda->direccion = "Av. Enrique Corona Morfin 121.";
          $Tienda->codigoPostal = "28415";
          $Tienda->save();
    }
}
