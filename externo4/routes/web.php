<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('welcome', 'welcome');
/*Direccion de la vista Editar */


Route::get('Ver/{Pro}','ControladorProductos@Etiquetas');
Route::view('electronico','electronicoLogeado');
//Route::view('electronico', 'HomeController@electronico');
Auth::routes();
Route::put('EditarUsuario','ControladorProductos@update');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('Editar2','EditarUsuario');
Route::view('/home/Editar','vistaUsuario');
//Busqueda
Route::get('Busqueda','ControladorProductos@Buscar')->name('Busqueda');
//Boton Comprar
Route::put('Datos','ControladorProductos@DameDatos');
Route::put('VentaRealizada','ControladorProductos@ComprarAhora');
Route::put('Carrito','ControladorProductos@AgregarCarrito');
Route::get('home/usuario','ControladorProductos@usuario');

Route::get('estadistica','ControladorProductos@chart');
Route::get('home/inventario','ControladorProductos@inventario');
Route::get('home/pedido','ControladorProductos@pedido');
Route::get('home/usuario', 'ControladorProductos@usuario');
//nuevas
Route::get('Inventario','ControladorProductos@Inventario')->name('Inventario');
Route::get('Pedidos','ControladorProductos@Pedido')->name('Pedido');
Route::get('Cliente','ControladorProductos@Cliente')->name('Cliente');
//Ver Inventario
Route::get('Inventario','ControladorProductos@Inventario')->name('Inventario');
// Vista Carrito Ventas
Route::put('MostrarCarrito','ControladorProductos@VistaCarrito');
Route::put('ComprarCarrito','ControladorProductos@Comprar');
Route::put('BorrarCarrito','ControladorProductos@Borrar');
Route::put('MostrarVentas','ControladorProductos@MuestraVentas');


