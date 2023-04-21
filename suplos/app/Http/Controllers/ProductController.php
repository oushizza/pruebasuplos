<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{
    public function filtroBienes(Request $request){
        $direccion = $request->input('direccion');
        $ciudad = $request->input('ciudad');
        $tipo = $request->input('tipo');
        $precio = $request->input('precio');

        $products = Product::where('direccion',$direccion)->orWhere('ciudad', $ciudad)
                                                            ->orWhere('tipo', $tipo)
                                                            ->orWhere('precio', $precio)
                                                            ->get();
        


        return view('filtro-bienes',compact('products'));
    }
    public function misBienes(){
        $products = Product::where('favorito','si')->get();
        


        return view('mis-bienes',compact('products'));
    }

    public function bienesDisponibles(){
        $products = Product::all();
        return view('bienes-disponibles',compact('products'));
    }
    public function agregarBienes(){
        //muestra el formulario donde agregamos datos
        return view('agregar-bienes');
    }
    public function agregar(Request $request){
        //guarda los datos agregados en el formulario

        //print_r($_POST); para ver si está funcionando en post
        $products = new Product();
        $products->direccion = $request->post('direccion');
        $products->ciudad = $request->post('ciudad');
        $products->tipo = $request->post('tipo');
        $products->favorito = $request->post('favorito');
        $products->precio = $request->post('precio');
        $products->save();

        return redirect()->route('bienes-disponibles');
    }

    public function edit($id){
        //sirve para mostrar un producto en un formulario y editar
        $product = Product::find($id);
        return view('actualizar',compact('product'));
        
    }

    public function update(Request $request, $id){
        //sirve para guardar los datos editados en la bd
        $products = Product::find($id);
        $products->direccion = $request->post('direccion');
        $products->ciudad = $request->post('ciudad');
        $products->tipo = $request->post('tipo');
        $products->favorito = $request->post('favorito');
        $products->precio = $request->post('precio');
        $products->save();

        return redirect()->route('bienes-disponibles');
    }

    public function destroy($id){
        //elimina un registro
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('bienes-disponibles');
        //return $product;
    }
}
