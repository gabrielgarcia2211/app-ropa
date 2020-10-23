<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $dataEmpresa  = DB::select('SELECT * FROM users');
        $dataCategoria  = DB::select('SELECT * FROM categorias');
        return view('welcome')->with(compact('dataEmpresa', 'dataCategoria'));
    }

    public function listProducto(Request $request){

        $dato = $request->input('search');
        if($dato=='no'){
            $dataProducto = Producto::select( 'productos.id','productos.ruta','productos.descripcioncorta')->join('categorias', 'categorias.id', '=', 'productos.categoria_id')->get();
        }else{
            $dataProducto = Producto::select( 'productos.id','productos.ruta','productos.descripcioncorta')->join('categorias', 'categorias.id', '=', 'productos.categoria_id')->where('categorias.id', '=', $dato)->get();
        }


        if($dataProducto!=""){
            foreach ($dataProducto as $est) {
                $json[] = array(
                    'id' => $est['id'],
                    'ruta' => $est['ruta'],
                    'descripcion' => $est['descripcioncorta'],
                );
            }
            $JString = json_encode($json);
            echo $JString;
        }else{
            echo 0;
        }



    }
}
