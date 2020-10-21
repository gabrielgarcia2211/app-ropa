<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewProducto(){
        $data  = DB::select('SELECT descripcion ,estado, id FROM categorias ');
        $dataM  = DB::select('SELECT descripcion ,nombre, id FROM marcas ');
        return view('productos')->with(compact('data', 'dataM'));
    }

    public function viewProductoLista(){
        $data  = DB::select('SELECT * FROM productos ');
        return view('lista')->with(compact('data'));
    }



    public function addProducto(Request $request){

        $files = $request->file('imagen');
        $id =$request->input('referencia');

        if(Storage::putFileAs('/public/'. $id . '/' , $files, $files->getClientOriginalName() )){
            $producto = new Producto();
            $producto->referencia = $id;
            $producto->nombre = $request->input('nombre');
            $producto->descripcioncorta = $request->input('descripcion');
            $producto->detalle = $request->input('detalle');
            $producto->valor = $request->input('valor');
            $producto->palabraclave = $request->input('palabra');
            $producto->estado = $request->input('estado');
            $producto->categoria_id = $request->input('valor');
            $producto->marca_id = $request->input('valorM');
            $producto->ruta = $files->getClientOriginalName();
            $producto->save();
            Alert::success('Producto guardado', 'Satisfactoriamente');
            return back();
        }
    }

    public function deleteProducto(Request $request){
        $dato = $request->input('search');
        $flight = Producto::find($dato);
        $flight->delete();
    }

    public function editProducto($id){
        dd($id);
    }



}
