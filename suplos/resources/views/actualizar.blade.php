@extends('base')
@section('content')
<div class="w-full bg-gray-200  p-4 h-screen flex justify-center">
    <form action="{{ route('update',$product->id) }}" method="post" class="w-1/2 p-4 bg-gray-100">
        @csrf
        @method('PUT')
        <div class="flex justify-center m-2 bg-white p-4">
            Agregar Bienes suplo
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="direccion">Dirección</label>
            <input type="text" placeholder="Escribe una dirección" id="direccion" name="direccion" value="{{ $product->direccion }}">
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="ciudad">Ciudad</label>
            
            
            <select name="ciudad" id="cars">
                <option value="" {{ $product->ciudad == '' ? 'selected' : '' }}>Seleccione opción</option>
                <option value="lima" {{ $product->ciudad == 'lima' ? 'selected' : '' }}>Lima</option>
                <option value="chiclayo" {{ $product->ciudad == 'chiclayo' ? 'selected' : '' }}>Chiclayo</option>
                <option value="piura" {{ $product->ciudad == 'piura' ? 'selected' : '' }}>Piura</option>
            </select>
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo">
                <option value="" {{ $product->tipo == '' ? 'selected' : '' }}>Seleccione opción</option>
                <option value="nuevo" {{ $product->tipo == 'nuevo' ? 'selected' : '' }}>Nuevo</option>
                <option value="usado" {{ $product->tipo == 'usado' ? 'selected' : '' }}>Usado</option>
            </select>
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="favorito">Favorito</label>
            <select name="favorito" id="favorito">
                <option value="" {{ $product->favorito == '' ? 'selected' : '' }}>Seleccione opción</option>
                <option value="si" {{ $product->favorito == 'si' ? 'selected' : '' }}>Si</option>
                <option value="no" {{ $product->favorito == 'no' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="precio">Precio</label>
            <input type="number"  id="precio" name="precio" value="{{ $product->precio }}">
        </div>
        <div class="flex justify-center flex-col m-2">
            <button type="submit" class="p-2 bg-blue-500">Actualizar</button>    
        </div>
    </form>
    
</div>
@endsection