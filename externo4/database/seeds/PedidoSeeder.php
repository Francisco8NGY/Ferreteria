<?php

use Illuminate\Database\Seeder;
use App\Pedido;
class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pedido = new Pedido();
        $Pedido->cantidad="3";
        $Pedido->total="30";
        $Pedido->producto_id="1";
        $Pedido->user_id="3";
        $Pedido->venta_id="3";
        $Pedido->save();
    }
}
