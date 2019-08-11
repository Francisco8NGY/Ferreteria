<?php
use Illuminate\Database\Seeder;
use App\Venta;
class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Venta = new Venta();
        $Venta->SubTotal="0";
        $Venta->iva="16";
        $Venta->total="500";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="cerrada";
        $Venta->fecha="2019-07-16";
        $Venta->user_id="3";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="0";
        $Venta->iva="16";
        $Venta->total="1000";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="cerrada";
        $Venta->fecha="2019-07-16";
        $Venta->user_id="3";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="0";
        $Venta->iva="16";
        $Venta->total="0";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-16";
        $Venta->user_id="3";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-15";
        $Venta->user_id="3";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-14";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-14";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-18";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-18";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-10";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-09";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-10";
        $Venta->user_id="1";
        $Venta->save();

        $Venta = new Venta();
        $Venta->SubTotal="50";
        $Venta->iva="16";
        $Venta->total="150";
        $Venta->TipoPago="Efectivo";
        $Venta->estado="abierta";
        $Venta->fecha="2019-07-12";
        $Venta->user_id="3";
        $Venta->save();
    }
}
