<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Cloudder;


class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewProducto(){
        $data  = DB::select('SELECT descripcion ,estado, id FROM categorias ');
        $dataM  = DB::select('SELECT descripcion ,nombre, id FROM marcas ');
        return view('admin.productos')->with(compact('data', 'dataM'));
    }

    public function viewProductoLista(){
        $data  = DB::select('SELECT * FROM productos ');
        return view('admin.lista')->with(compact('data'));
    }



    public function addProducto(Request $request){

        $files = $request->file('imagen');
        $id =$request->input('referencia');

        $maxId = Producto::max('id');
        if(!isset($maxId)){
            $maxId = 1;
        }else{
            $maxId = $maxId +1;
        }

        if(file_exists("contenedor/" . $maxId) || @mkdir("contenedor/" . $maxId)) {

            $origen=$_FILES["imagen"]["tmp_name"];
            $destino=$_FILES["imagen"]["name"];
            $destinoF = "contenedor/" .  $maxId . '/' . $destino ;

            if (copy($origen, $destinoF)) { //Se copia el archivo de la ruta a la carpeta del server
                $producto = new Producto();
                $producto->referencia = $id;
                $producto->nombre = $request->input('nombre');
                $producto->descripcioncorta = $request->input('descripcion');
                $producto->detalle = $request->input('detalle');
                $producto->valor = $request->input('precio');
                $producto->palabraclave = $request->input('palabra');
                $producto->estado = $request->input('estado');
                $producto->categoria_id = $request->input('valor');
                $producto->marca_id = $request->input('valorM');
                $producto->ruta = $files->getClientOriginalName();
                $producto->save();
                Alert::success('Producto guardado', 'Satisfactoriamente');
                return back();
            } else {
                echo 1;
            }

        }


    }

    public function deleteProducto(Request $request){
        $dat = $request->input('search');
        $flight = Producto::find($dat);
        $files = $flight->ruta;
        $this->deleteDir($dat);
        $flight->delete();
    }




    public function viewEditProducto($id, Request $request){

        $producto = Producto::find($id);
        $data  = DB::select('SELECT descripcion ,estado, id FROM categorias ');
        $dataM  = DB::select('SELECT descripcion ,nombre, id FROM marcas ');
        $request->session()->put('key', $id);
        return view('admin.editar')->with(compact('producto', 'data', 'dataM'));
    }

    public function editProducto(Request $request)
    {
        $files = $request->file('imagen');
        $id = $request->session()->get('key');
        $producto = Producto::find($id);

        $this->deleteDir($id);

        if (file_exists("contenedor/" . $id) || @mkdir("contenedor/" . $id)) {

            $origen=$_FILES["imagen"]["tmp_name"];
            $destino=$_FILES["imagen"]["name"];
            $destinoF = "contenedor/" .  $id . '/' . $destino ;

            if (copy($origen, $destinoF)) { //Se copia el archivo de la ruta a la carpeta del server
                $producto->nombre = $request->input('nombre');
                $producto->descripcioncorta = $request->input('descripcion');
                $producto->detalle = $request->input('detalle');
                $producto->valor = $request->input('precio');
                $producto->palabraclave = $request->input('palabra');
                $producto->estado = $request->input('estado');
                $producto->categoria_id = $request->input('valor');
                $producto->marca_id = $request->input('valorM');
                $producto->ruta = $files->getClientOriginalName();
                $producto->save();
                Alert::success('Producto editado', 'Satisfactoriamente');
                $request->session()->forget('key');
                return redirect('home');
            } else {
                echo 1;
            }
        }
    }

    function deleteDir($dir){
        $dir = "contenedor/". $dir. '/';
        foreach(glob($dir.'*.*') as $v){
            unlink($v);
        }
        rmdir($dir);
    }







}
