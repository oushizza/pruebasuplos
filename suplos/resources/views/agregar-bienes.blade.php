@extends('base')
@section('content')
<div class="w-full bg-gray-200  p-4 h-screen flex justify-center">
    <form action="{{ route('agregar') }}" method="post" class="w-1/2 p-4 bg-gray-100">
        @csrf
        <div class="flex justify-center m-2 bg-white p-4">
            Agregar Bienes suplo
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="direccion">Dirección</label>
            <input type="text" placeholder="Escribe una dirección" id="direccion" name="direccion">
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="ciudad">Ciudad</label>
            
            <select name="ciudad" id="cars">
                <option value="">Seleccione opción</option>
                <option value="lima">Lima</option>
                <option value="chiclayo">Chiclayo</option>
                <option value="piura">Piura</option>
            </select>
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo">
                <option value="">Seleccione opción</option>
                <option value="nuevo">Nuevo</option>
                <option value="usado">Usado</option>
            </select>
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="favorito">Favorito</label>
            <select name="favorito" id="favorito">
                <option value="">Seleccione opción</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="precio">Precio</label>
            <input type="number"  id="precio" name="precio">
        </div>
        <div class="flex justify-center flex-col m-2">
            <button type="submit" class="p-2 bg-blue-500">Buscar</button>    
        </div>
    </form>
    
</div>
@endsection