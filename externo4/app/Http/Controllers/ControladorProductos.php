<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class ControladorProductos extends Controller
{
    //

    /*
    public function Etiquetas($Pro = null){
        echo $Pro;
        switch($Pro){
            case 'Electrico':
            echo" Entro a electrico";
            $user = DB::select('select marca from producto');
            return view('Pagina2',['users' => $user]);
            break;
            default:
            echo "No es la llama que buscabas";
            return view('Pagina1');
            break;
        }
            
        
    }
    */
    public function Etiquetas($Pro = null)
    {
        switch ($Pro) {
            case 'Electrico':
                $producto = DB::select('select * from productos where categoria = ?', [$Pro]);
                return view('EtiquetaProductos', ['producto' => $producto]);
                break;
            case 'GriferiaPlomeria':
                $producto = DB::select('select * from productos where categoria = ?', ['Griferia y plomeria']);
                return view('EtiquetaProductos', ['producto' => $producto]);
                break;
            case 'NivelIndustrial':

                $producto = DB::select('select * from productos where categoria = ?', ['Nivel e Industrial']);
                return view('EtiquetaProductos', ['producto' => $producto]);
                break;
            case 'Remaches':

                $producto = DB::select('select * from productos where categoria = ?', [$Pro]);
                return view('EtiquetaProductos', ['producto' => $producto]);
                break;
            case 'Tornilleria':

                $producto = DB::select('select * from productos where categoria = ?', ['Tornilleria']);
                return view('EtiquetaProductos', ['producto' => $producto]);
                break;
        }
    }
    public function update(Request $request)
    {
        //dd('entro');
        $data2 = request()->validate([
            'id' => 'required',
        ]);
        $data = request()->validate([
            'id' => 'required',
            'name' => 'required',
            'apellido' => 'required',
            'usuario' => 'required',
            'email' => 'required|email|unique:users,email,' . $data2['id'],
            'telefono' => 'required',
            'celular' => 'required',
            'domicilio' => 'required',
            'codigoPostal' => 'required',

        ]);



        /*  if($data['password'] != null){
      $data['password'] = bcrypt($data['password']);
    }else{
      unset($data['password']);
    }*/

        $user = User::findOrFail($data['id']);
        $user->update($request->all());

        return redirect()->action('HomeController@index');
        // return view('/home');
    }
    public function Buscar(Request $request)
    {
        $nombre = $request->get('nombre');


        $users = Producto::orderBy('id', 'DESC')
            ->Producto($nombre)
            ->paginate(4);

        return view('Busqueda', compact('users', 'nombre'));
    }
    public function DameDatos(Request $request)
    {
        $data3 = request()->validate([
            'id' => 'required',
        ]);
        $DatosProducto = DB::select('select * from productos where id = ?', [$data3['id']]);
        return view('Datos', ['DatosProducto' => $DatosProducto]);
    }
    //Fucnion para agregar articulos al carrito
    public function ComprarAhora(Request  $request)
    {
        $data4 = request()->validate([
            'id' => 'required',
            'unidad' => 'required',
            'user_id' => 'required',
            'precio' => 'required',
            'existencia' => 'required'
        ]);
        $total = $data4['precio'] * $data4['unidad'];
        $iva = $total * .16;
        $totalIVA = $iva + $total;
        $Actual = $data4['existencia'] - $data4['unidad'];
        //dd($Actual);
        DB::table('productos')
            ->where('id', '=', $data4['id'])
            ->update(['existencia' => $Actual]);

        DB::table('ventas')->insert(
            ['SubTotal' => $total, 'iva' => $iva, 'total' => $totalIVA, 'tipoPago' => 'Pago al Recibir', 'estado' => 'cerrada', 'fecha' => '2019-07-11', 'user_id' => $data4['user_id']]
        );
        $obtenerVenta = DB::table('ventas')
            ->orderBy('id', 'desc')
            ->where([
                ['estado', '=', 'cerrada'],
                ['user_id', '=', $data4['user_id']]
            ])
            ->get();
        DB::table('pedidos')->insert(
            ['cantidad' => $data4['unidad'], 'total' => $total, 'producto_id' => $data4['id'], 'user_id' => $data4['user_id'], 'venta_id' => $obtenerVenta[0]->id]
        );
        $infoProducto = DB::table('productos')
            ->where('id', '=', $data4['id'])->get();
        $unidad = $data4['unidad'];
        return view('VentaRealizada', ['venta' => $obtenerVenta], ['infoProducto' => $infoProducto])->with('unidad', $unidad);
    }
    //Fucnion para agregar articulos al carrito
    public function AgregarCarrito(Request  $request)
    {
        $data5 = request()->validate([
            'id' => 'required',
            'unidad' => 'required',
            'user_id' => 'required',
            'precio' => 'required',
        ]);

        $obtenerVenta = DB::table('ventas')
            ->where([
                ['estado', '=', 'abierta'],
                ['user_id', '=', $data5['user_id']]
            ])
            ->get();
        //dd($obtenerVenta[0]->id);

        //dd(count($obtenerVenta));

        if (count($obtenerVenta) == 0) {

            DB::table('ventas')->insert(
                ['SubTotal' => '0', 'iva' => '0', 'total' => '0', 'tipoPago' => 'Efectivo', 'estado' => 'abierta', 'fecha' => '2019-07-11', 'user_id' => $data5['user_id']]
            );
            $obtenerVentaNueva = DB::table('ventas')
                ->where([
                    ['estado', '=', 'abierta'],
                    ['user_id', '=', $data5['user_id']]
                ])->get();
            $total = $data5['precio'] * $data5['unidad'];

            DB::table('pedidos')->insert(
                ['cantidad' => $data5['unidad'], 'total' => $total, 'producto_id' => $data5['id'], 'user_id' => $data5['user_id'], 'venta_id' => $obtenerVentaNueva[0]->id]
            );
        } else {

            $total = $data5['precio'] * $data5['unidad'];
            DB::table('pedidos')->insert(
                ['cantidad' => $data5['unidad'], 'total' => $total, 'producto_id' => $data5['id'], 'user_id' => $data5['user_id'], 'venta_id' => $obtenerVenta[0]->id]
            );
        }
        return view('welcome');
    }
    public function chart()
    {
        $pastel = DB::table('ventas')
            ->select('ventas.fecha', DB::raw('SUM(ventas.total) as total'))
            ->orderBy('ventas.fecha', 'desc')
            ->groupBy('ventas.fecha')
            ->take(7)
            ->get();
        return view('estadisticas', ['pastel' => $pastel]);
    }
    public function Inventario(Request $request)
    {
        $nombre = $request->get('nombre');
        $users = Producto::orderBy('id', 'DESC')
            ->paginate(4);
        return view('InventarioAdmin', compact('users', 'nombre'));
    }
    public function Pedido(Request $request)
    {


        $nombre = $request->get('nombre');
        //$users = Venta::orderBy('id', 'DESC')
        //    ->paginate(4);
        //dd($users);


        $users = DB::table('ventas')
            ->join('users', 'ventas.user_id', '=', 'users.id')
            ->select(
                'users.name',
                'ventas.id',
                'ventas.estado',
                'ventas.fecha',
                'ventas.tipoPago',
                'ventas.iva',
                'ventas.SubTotal',
                'ventas.total',
                'ventas.user_id'
            )
            ->orderBy('ventas.fecha', 'DESC')
            ->paginate(4);
        //dd($users);
        return view('pedidoAdmin', compact('users', 'nombre'));
    }
    public function Cliente(Request $request)
    {
        $nombre = $request->get('nombre');
        //  $users = User::orderBy('id', 'DESC')
        //      ->paginate(4);

        $users = DB::table('ventas')
            ->join('users', 'ventas.user_id', '=', 'users.id')
            ->select(
                'ventas.fecha',
                DB::raw('SUM(ventas.total) as total'),
                'users.id',
                'users.name',
                'users.apellido',
                'users.usuario',
                'users.email',
                'users.telefono',
                'users.celular',
                'users.domicilio',
                'users.codigoPostal'
            )
            ->orderBy('users.id', 'DESC')
            ->groupBy(
                'users.id',
                'ventas.fecha',
                'users.id',
                'users.name',
                'users.apellido',
                'users.usuario',
                'users.email',
                'users.telefono',
                'users.celular',
                'users.domicilio',
                'users.codigoPostal'
            )
            ->take(10)
            ->get();

        //  dd($users);

        return view('userAdmin', compact('users', 'nombre'));
    }
    public function VistaCarrito(Request  $request)
    {
        //dd('entro');
        $info = request()->validate([
            'idUsuario' => 'required',
        ]);
        $obtenerVenta = DB::table('ventas')
            ->where([
                ['estado', '=', 'abierta'],
                ['user_id', '=', $info['idUsuario']]
            ])
            ->get();
        if (count($obtenerVenta) == 0) {
            //Carrito Vacio
            $pedido = DB::table('pedidos')
                ->join('productos', 'pedidos.producto_id', '=', 'productos.id')
                ->select('pedidos.id as idp', 'pedidos.cantidad', 'pedidos.total', 'pedidos.venta_id', 'productos.id', 'productos.nombre', 'productos.precioPublico', 'productos.imagen')
                ->where('pedidos.user_id', '=', 0)
                ->get();
            return view('VistaCarrito', ['pedido' => $pedido]);
        } else {
            $pedido = DB::table('pedidos')
                ->join('productos', 'pedidos.producto_id', '=', 'productos.id')
                ->select('pedidos.id as idp', 'pedidos.cantidad', 'pedidos.total', 'pedidos.venta_id', 'productos.id', 'productos.nombre', 'productos.precioPublico', 'productos.imagen')
                ->where([
                    ['pedidos.user_id', '=', $info['idUsuario']],
                    ['pedidos.venta_id', '=', $obtenerVenta[0]->id]
                ])
                ->get();
            $CalcularTotal = DB::table('pedidos')
                ->select(DB::raw('SUM(pedidos.total) as total'))
                ->where('venta_id', '=', $obtenerVenta[0]->id)
                ->get();
            $iva = $CalcularTotal[0]->total * .16;
            $sumaTodo = $iva + $CalcularTotal[0]->total;
            return view('VistaCarrito', ['pedido' => $pedido], ['sumTotal' => $CalcularTotal])->with('iva', $iva)->with('todo', $sumaTodo);
        }
    }
    public function MuestraVentas()
    {
        $info = request()->validate([
            'idUsuario' => 'required',
        ]);
        $obtenerVenta = DB::table('ventas')
            ->where([
                ['estado', '=', 'cerrada'],
                ['user_id', '=', $info['idUsuario']]
            ])->get();
           
        return view('VistaVentas',['tus' => $obtenerVenta]);
    }
    public function Comprar(Request  $request)
    {
        $venta = request()->validate([
            'idVenta' => 'required',
        ]);
        $Calcular = DB::table('pedidos')
            ->select(DB::raw('SUM(pedidos.total) as total'))
            ->where('venta_id', '=', $venta['idVenta'])
            ->get();
        //dd($venta['idVenta']);
        $obtenerTotal = $Calcular[0]->total;
        $iva = $obtenerTotal * .16;
        $totalIVA = $iva + $obtenerTotal;

        DB::table('ventas')
            ->where('id', '=', $venta['idVenta'])
            ->update([
                'SubTotal' => $obtenerTotal,
                'iva' => $iva,
                'total' => $totalIVA,
                'tipoPago' => 'Pago al Recibir',
                'estado' => 'cerrada',
                'fecha' => '2019-07-11'
            ]);
        $infoVenta = DB::table('ventas')
            ->where('id', '=', $venta['idVenta'])->get();

        return view('CarritoFinal', ['info' => $infoVenta]);
    }
    public function Borrar(Request  $request)
    {
        //dd('entro');
        $info = request()->validate([
            'idUsuario' => 'required',
            'idPedido' => 'required',
        ]);
        DB::table('pedidos')->where('id', '=', $info['idPedido'])->delete();
        $obtenerVenta = DB::table('ventas')
            ->where([
                ['estado', '=', 'abierta'],
                ['user_id', '=', $info['idUsuario']]
            ])
            ->get();
        if (count($obtenerVenta) == 0) {
            //Carrito Vacio
            $pedido = DB::table('pedidos')
                ->join('productos', 'pedidos.producto_id', '=', 'productos.id')
                ->select('pedidos.id as idp', 'pedidos.cantidad', 'pedidos.total', 'pedidos.venta_id', 'productos.id', 'productos.nombre', 'productos.precioPublico', 'productos.imagen')
                ->where('pedidos.user_id', '=', 0)
                ->get();
            return view('VistaCarrito', ['pedido' => $pedido]);
        } else {
            $pedido = DB::table('pedidos')
                ->join('productos', 'pedidos.producto_id', '=', 'productos.id')
                ->select('pedidos.id as idp', 'pedidos.cantidad', 'pedidos.total', 'pedidos.venta_id', 'productos.id', 'productos.nombre', 'productos.precioPublico', 'productos.imagen')
                ->where([
                    ['pedidos.user_id', '=', $info['idUsuario']],
                    ['pedidos.venta_id', '=', $obtenerVenta[0]->id]
                ])
                ->get();
            $CalcularTotal = DB::table('pedidos')
                ->select(DB::raw('SUM(pedidos.total) as total'))
                ->where('venta_id', '=', $obtenerVenta[0]->id)
                ->get();
            $iva = $CalcularTotal[0]->total * .16;
            $sumaTodo = $iva + $CalcularTotal[0]->total;
            return view('VistaCarrito', ['pedido' => $pedido], ['sumTotal' => $CalcularTotal])->with('iva', $iva)->with('todo', $sumaTodo);
        }
    }
}
