<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
        $Producto = new Producto();
        $Producto->nombre = "Mufa con abrazadera para tubo 3/4′, Volteck";
        $Producto->marca = "Volteck";
        $Producto->modelo = "2019";
        $Producto->categoria = "Electrico";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "89";
        $Producto->costo = "12.98";
        $Producto->precioPublico = "19.84";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pe1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //2
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera de tubo tipo omega 1′, bolsa con 10 pzas, Volteck";
        $Producto->marca = "Volteck";
        $Producto->modelo = "2019";
        $Producto->categoria = "Electrico";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "135";
        $Producto->costo = "11.47";
        $Producto->precioPublico = "18.98";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pe2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //3
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera de tubo tipo uña 1′, bolsa con 10 pzas, Volteck";
        $Producto->marca = "Volteck";
        $Producto->modelo = "2019";
        $Producto->categoria = "Electrico";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "64";
        $Producto->costo = "13.47";
        $Producto->precioPublico = "18.98";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pe3.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //4
        //Siguiente categoria
        $Producto = new Producto();
        $Producto->nombre = "Mezcladora lavabo, cuello curvo, compresión, Basic";
        $Producto->marca = "Foset";
        $Producto->modelo = "2019";
        $Producto->categoria = "Griferia y Plomeria";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "73";
        $Producto->costo = "206.47";
        $Producto->precioPublico = "240.87";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pg1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //5
        $Producto = new Producto();
        $Producto->nombre = "Adaptador  hembra de CPVC con inserto metálico 1′";
        $Producto->marca = "Foset";
        $Producto->modelo = "2019";
        $Producto->categoria = "Griferia y Plomeria";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "85";
        $Producto->costo = "54.24";
        $Producto->precioPublico = "77.60";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pg2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //6
        $Producto = new Producto();
        $Producto->nombre = "Adaptador para poliducto, 1′, macho";
        $Producto->marca = "Foset";
        $Producto->modelo = "2019";
        $Producto->categoria = "Griferia y Plomeria";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "143";
        $Producto->costo = "29.47";
        $Producto->precioPublico = "42.25";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pg3.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //7
        //Siguiente categoria
        $Producto = new Producto();
        $Producto->nombre = "Pasador de cromo, 2′";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "95";
        $Producto->costo = "24.74";
        $Producto->precioPublico = "38.79";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pr1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //8
        $Producto = new Producto();
        $Producto->nombre = "Pasador de latón, 2′";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "65";
        $Producto->costo = "24.74";
        $Producto->precioPublico = "38.79";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pr2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //9
        $Producto = new Producto();
        $Producto->nombre = "Portacandado latonado 1-3/4′";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "55";
        $Producto->costo = "9.74";
        $Producto->precioPublico = "19.84";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pr3.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //10
        //Siguiente categoria
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera reforzada, # 10, 3/4 – 1-1/16′, bolsa 10 pzas";
        $Producto->marca = "Fiero";
        $Producto->modelo = "2019";
        $Producto->categoria = "Tornilleria";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "68";
        $Producto->costo = "41.31";
        $Producto->precioPublico = "54.31";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pt1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "5";
        $Producto->save();


        //11
        $Producto = new Producto();
        $Producto->nombre = "Acoplador para BOLA-35";
        $Producto->marca = "Trupper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Tornilleria";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "51";
        $Producto->costo = "214.71";
        $Producto->precioPublico = "263.80";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pt2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //12
        $Producto = new Producto();
        $Producto->nombre = "Bisagra cuadrada 3′, latonado, plana";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Tornilleria";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "79";
        $Producto->costo = "6.14";
        $Producto->precioPublico = "13.37";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pt3.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //13
        //Siguiente categoria
        $Producto = new Producto();
        $Producto->nombre = "Manguera 1′, industrial";
        $Producto->marca = "Trupper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel e Industrial";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "94";
        $Producto->costo = "16.47";
        $Producto->precioPublico = "27.60";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pni1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //14
        $Producto = new Producto();
        $Producto->nombre = "Manguera 1/2′, industrial";
        $Producto->marca = "Trupper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel e Industrial";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "75";
        $Producto->costo = "2.98";
        $Producto->precioPublico = "6.90";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pni1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //15
        $Producto = new Producto();
        $Producto->nombre = "Manguera 3/4′, industrial";
        $Producto->marca = "Trupper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel e Industrial";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "91";
        $Producto->costo = "12.93";
        $Producto->precioPublico = "5.73";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pni1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //16
        $Producto = new Producto();
        $Producto->nombre = "Pasador de cromo, 4′";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "36";
        $Producto->costo = "74.50";
        $Producto->precioPublico = "89.63";
        $Producto->fecha = "2019-07-11";
        $Producto->imagen = "http://35.188.90.189/img/pr2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //17
        $Producto = new Producto();
        $Producto->nombre = "Pasador de latón, 2′";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "97";
        $Producto->costo = "21.30";
        $Producto->precioPublico = "38.79";
        $Producto->fecha = "2019-07-29";
        $Producto->imagen = "http://35.188.90.189/img/pr2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //18
        $Producto = new Producto();
        $Producto->nombre = "Portacandado latonado 1-3/4";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "65";
        $Producto->costo = "11.52";
        $Producto->precioPublico = "19.84";
        $Producto->fecha = "2019-07-21";
        $Producto->imagen = "http://35.188.90.189/img/pr3.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //19
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera reforzada #10, 3/4 - 11-1/16";
        $Producto->marca = "Fiero";
        $Producto->modelo = "2019";
        $Producto->categoria = "Tornillería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "65";
        $Producto->costo = "41.35";
        $Producto->precioPublico = "54.31";
        $Producto->fecha = "2019-07-22";
        $Producto->imagen = "http://35.188.90.189/img/pt1.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "6";
        $Producto->save();


        //20
        $Producto = new Producto();
        $Producto->nombre = "Acoplador para BOLA-35";
        $Producto->marca = "Fiero";
        $Producto->modelo = "2019";
        $Producto->categoria = "Tornillería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "98";
        $Producto->costo = "216.80";
        $Producto->precioPublico = "263.80";
        $Producto->fecha = "2019-07-10";
        $Producto->imagen = "http://35.188.90.189/img/pt2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "6";
        $Producto->save();


        //21
        $Producto = new Producto();
        $Producto->nombre = "Bisagra cuadrada 3', latonado, plana";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Tornillería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "78";
        $Producto->costo = "6.74";
        $Producto->precioPublico = "13.37";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://35.188.90.189/img/pt3.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //22
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera tubo tipo omega 1/2, bolsa con 10 pzas, Volteck";
        $Producto->marca = "Volteck";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "84";
        $Producto->costo = "11.20";
        $Producto->precioPublico = "11.50";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.ferreteriafara.com/wp-content/uploads/2018/06/46923-768x768.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();



        //23
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera tubo tipo omega 3', bolsa con 5 pzas, Volteck";
        $Producto->marca = "Volteck";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "91";
        $Producto->costo = "44.80";
        $Producto->precioPublico = "45.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.ferreteriafara.com/wp-content/uploads/2018/06/46925-768x768.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //24
        $Producto = new Producto();
        $Producto->nombre = "Adaptador 3 a 2 blanco, Volteck, 2 pzas";
        $Producto->marca = "Volteck";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "200";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "49";
        $Producto->costo = "15.0";
        $Producto->precioPublico = "15.50";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://www.elferretero.com.mx/images/catalogo/900x900/46252.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //25
        $Producto = new Producto();
        $Producto->nombre = "Antena interior, alta definición, 8'";
        $Producto->marca = "Genérico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "200";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "51";
        $Producto->costo = "249.0";
        $Producto->precioPublico = "250.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.tuferre.com/media/catalog/product/cache/1/image/1800x1800/9df78eab33525d08d6e5fb8d27136e95/A/N/ANHD-8_4.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //26
        $Producto = new Producto();
        $Producto->nombre = "Apagador de palanca, 2 tornillos";
        $Producto->marca = "Generico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "200";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "63";
        $Producto->costo = "12.90";
        $Producto->precioPublico = "13.50";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.ferreteriasmexico.com/13416-large_default/interruptor-de-palanca-2-tornillos.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //27
        $Producto = new Producto();
        $Producto->nombre = "Antena interior, alta definición, 8'";
        $Producto->marca = "Generico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "200";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "51";
        $Producto->costo = "51";
        $Producto->precioPublico = "249.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.tuferre.com/media/catalog/product/cache/1/image/1800x1800/9df78eab33525d08d6e5fb8d27136e95/A/N/ANHD-8_4.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //28
        $Producto = new Producto();
        $Producto->nombre = "Apagador de palanca, 2 tornillos";
        $Producto->marca = "Generico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "200";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "63";
        $Producto->costo = "12.90";
        $Producto->precioPublico = "13.50";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.ferreteriasmexico.com/13416-large_default/interruptor-de-palanca-2-tornillos.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //29
        $Producto = new Producto();
        $Producto->nombre = "Arbotante farol soportado, negro, 1XE26";
        $Producto->marca = "HomeBasic";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "20";
        $Producto->existencia = "34";
        $Producto->costo = "12.90";
        $Producto->precioPublico = "13.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://grupoelcaminante.com/wp-content/uploads/2019/04/47289.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //30
        $Producto = new Producto();
        $Producto->nombre = "Mezcladora lavabo, manerales palanca, Basic";
        $Producto->marca = "Basic";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "130";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "90";
        $Producto->costo = "271.0";
        $Producto->precioPublico = "272.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://www.ferresin.com.mx/files/Producto/341/Foto/78-339-1770.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //31
        $Producto = new Producto();
        $Producto->nombre = "Arbotante farol soportado, negro, 1XE26";
        $Producto->marca = "HomeBasic";
        $Producto->modelo = "2019";
        $Producto->categoria = "Eléctrico";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "20";
        $Producto->existencia = "34";
        $Producto->costo = "12.90";
        $Producto->precioPublico = "13.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://grupoelcaminante.com/wp-content/uploads/2019/04/47289.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //32
        $Producto = new Producto();
        $Producto->nombre = "Mezcladora lavabo, manerales palanca, Basic";
        $Producto->marca = "Basic";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "130";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "90";
        $Producto->costo = "271.50";
        $Producto->precioPublico = "272.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://www.ferresin.com.mx/files/Producto/341/Foto/78-339-1770.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "3";
        $Producto->save();


        //33
        $Producto = new Producto();
        $Producto->nombre = "Abrazadera tipo U CPVC 1/2";
        $Producto->marca = "Generico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "75";
        $Producto->costo = "0.50";
        $Producto->precioPublico = "1.50";
        $Producto->fecha = "2019-07-22";
        $Producto->imagen = "https://static.mercadoshops.com/fosetabrazadera-tipo-u-cpvc-1248917_iZ1058987218XvZgrandeXpZ1XfZ185770371-29635531878-1XsZ185770371xIM.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //34
        $Producto = new Producto();
        $Producto->nombre = "Adaptador macho de CPVC con inserto metálico 1";
        $Producto->marca = "Foset";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "39";
        $Producto->costo = "63.70";
        $Producto->precioPublico = "64.0";
        $Producto->fecha = "2019-07-25";
        $Producto->imagen = "http://www.ferreayotla.com/image/p/medium-45383.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //35
        $Producto = new Producto();
        $Producto->nombre = "Adaptador para poliducto, 1/2, macho";
        $Producto->marca = "Generico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "93";
        $Producto->costo = "15.90";
        $Producto->precioPublico = "16.50";
        $Producto->fecha = "2019-07-12";
        $Producto->imagen = "http://www.elferretero.com.mx/images/catalogo/900x900/49305.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //36
        $Producto = new Producto();
        $Producto->nombre = "Adaptador para poliducto, 3/4, macho";
        $Producto->marca = "Generico";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "150";
        $Producto->minimoProducto = "50";
        $Producto->existencia = "47";
        $Producto->costo = "25.0";
        $Producto->precioPublico = "26.50";
        $Producto->fecha = "2019-07-10";
        $Producto->imagen = "http://abastecedora.com/images/products/display/49305.2.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "2";
        $Producto->save();


        //37
        $Producto = new Producto();
        $Producto->nombre = "Brazo y chapetón de repuesto para regadera, Aqua, blister";
        $Producto->marca = "Blister";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "92";
        $Producto->costo = "108.60";
        $Producto->precioPublico = "110.0";
        $Producto->fecha = "2019-07-27";
        $Producto->imagen = "https://www.ferreteriafara.com/wp-content/uploads/2018/06/44510-768x768.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //38
        $Producto = new Producto();
        $Producto->nombre = "Cespol de latón cromado para lavao tipo moneda";
        $Producto->marca = "Foset";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "130";
        $Producto->minimoProducto = "40";
        $Producto->existencia = "82";
        $Producto->costo = "231.50";
        $Producto->precioPublico = "232.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://cdn2.shopify.com/s/files/1/1431/6668/products/35572996582_fe392129c1_1024x1024.jpg?v=1499369871";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //39
        $Producto = new Producto();
        $Producto->nombre = "Brazo y chapetón de repuesto para regadera, Aqua, blister";
        $Producto->marca = "Blister";
        $Producto->modelo = "2019";
        $Producto->categoria = "Grifería y Plomería";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "92";
        $Producto->costo = "108.60";
        $Producto->precioPublico = "110.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.ferreteriafara.com/wp-content/uploads/2018/06/44510-768x768.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //40
        $Producto = new Producto();
        $Producto->nombre = "Manguera 3/4, industrial";
        $Producto->marca = "Truper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "120";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "47";
        $Producto->costo = "12.90";
        $Producto->precioPublico = "13.5";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://www.ferreteriasmexico.com/10735-thickbox_default/manguera-industrial-3-4.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //41
        $Producto = new Producto();
        $Producto->nombre = "Manguer 3/8 de nivel";
        $Producto->marca = "Truper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "120";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "42";
        $Producto->costo = "3.89";
        $Producto->precioPublico = "4.10";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/101320/101320-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //42
        $Producto = new Producto();
        $Producto->nombre = "Manguera 5/16 de nivel";
        $Producto->marca = "Truper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "120";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "38";
        $Producto->costo = "3.02";
        $Producto->precioPublico = "3.50";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/101323/101323-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //43
        $Producto = new Producto();
        $Producto->nombre = "Guante de carnaza corto";
        $Producto->marca = "El Diamante";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "80";
        $Producto->costo = "35.0";
        $Producto->precioPublico = "40.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/711819/711819-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //44
        $Producto = new Producto();
        $Producto->nombre = "Manguera 5/16 de nivel";
        $Producto->marca = "Truper";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "120";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "38";
        $Producto->costo = "3.02";
        $Producto->precioPublico = "3.50";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/101323/101323-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //45
        $Producto = new Producto();
        $Producto->nombre = "Guante de carnaza corto";
        $Producto->marca = "El Diamante";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "80";
        $Producto->costo = "35.0";
        $Producto->precioPublico = "40.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/711819/711819-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //46
        $Producto = new Producto();
        $Producto->nombre = "Guantes para trabajos pesados Mustang";
        $Producto->marca = "Vargas";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "48";
        $Producto->costo = "55.0";
        $Producto->precioPublico = "59.90";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/708405/708405-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //47
        $Producto = new Producto();
        $Producto->nombre = "CAB-14-A Lente de seguridad NEO AB CABEL";
        $Producto->marca = "CABEL";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "120";
        $Producto->minimoProducto = "40";
        $Producto->existencia = "88";
        $Producto->costo = "21.0";
        $Producto->precioPublico = "25.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/708070/708070-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "4";
        $Producto->save();


        //48
        $Producto = new Producto();
        $Producto->nombre = "Casco de protección blanco CABEL";
        $Producto->marca = "CABEL";
        $Producto->modelo = "2019";
        $Producto->categoria = "Nivel Industrial";
        $Producto->maximoProducto = "120";
        $Producto->minimoProducto = "40";
        $Producto->existencia = "49";
        $Producto->costo = "49.0";
        $Producto->precioPublico = "55.0";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://5af2ab3cc7e0a3391218-bb2ad470ea539c5163aaf64511d96f64.ssl.cf1.rackcdn.com/productos/126861/126861-d.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //49
        $Producto = new Producto();
        $Producto->nombre = "Pasador de cromo 2'";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "59";
        $Producto->costo = "38.0";
        $Producto->precioPublico = "38.79";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "http://www.elferretero.com.mx/images/catalogo/900x900/43713.jpg";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();


        //50
        $Producto = new Producto();
        $Producto->nombre = "Pasador de cromo 3'";
        $Producto->marca = "Hermex";
        $Producto->modelo = "2019";
        $Producto->categoria = "Remaches";
        $Producto->maximoProducto = "100";
        $Producto->minimoProducto = "30";
        $Producto->existencia = "46";
        $Producto->costo = "57.0";
        $Producto->precioPublico = "57.76";
        $Producto->fecha = "2019-07-09";
        $Producto->imagen = "https://cdn.shopify.com/s/files/1/0033/8418/0848/products/43714_1024x1024.jpg?v=1560641414";
        $Producto->tienda_id = "1";
        $Producto->provedor_id = "1";
        $Producto->save();

    }
}
