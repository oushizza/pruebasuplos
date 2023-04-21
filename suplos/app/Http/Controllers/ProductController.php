<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function misBienes(){
        //es la pagina de inicio
        //$datos = Product::all();
        $datos = 'hola';


        return view('mis-bienes',compact('datos'));
    }

    public function bienesDisponibles(){
        //muestra el formulario donde agregamos datos
        return view('bienes-disponibles');
    }
    public function agregarBienes(){
        //muestra el formulario donde agregamos datos
        return view('agregar-bienes');
    }
    public function agregar(Request $request){
        //guarda los datos agregados en el formulario

        //print_r($_POST); para ver si está funcionando en post
        /*$products = new Product();
        $products->nombre = $request->post('prodname');
        $products->precio = $request->post('prodcost');
        $products->save();*/

        return redirect()->route('home')->with('success','agregado correctamente');



    }
}
