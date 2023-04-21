@extends('base')
@section('content')
<div class="flex justify-center items-center">
    <a href="{{ route('agregar-bienes') }}" class="bg-blue-200 p-2 m-2">Agregar Bienes</a>
</div>
<div class="flex justify-center">
    <table class="table-auto border border-red-500 w-1/2 text-center">
        <thead class="p-4">
          <tr>
            <th>id</th>
            <th>direccion</th>
            <th>ciudad</th>
            <th>tipo</th>
            <th>favorito</th>
            <th>precio</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody class="p-2">
            @foreach ($products as $itemdatos)
                <tr>
                    <td>{{ $itemdatos->id }}</td>
                    <td>{{ $itemdatos->direccion }}</td>
                    <td>{{ $itemdatos->ciudad }}</td>
                    <td>{{ $itemdatos->tipo }}</td>
                    <td>{{ $itemdatos->favorito }}</td>
                    <td>{{ $itemdatos->precio }}</td>
                    <td>
                        <form action="{{ route('edit',$itemdatos->id) }}" method="get"> <!-- esto es para mandarle a la ruta y elparametro del producto con el que trabajaremos route('edit',$itemdatos->id)-->
                            @csrf
                            <button type="submit" class="bg-blue-500 rounded-lg p-2">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('delete',$itemdatos->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-blue-500 rounded-lg p-2">Eliminar</button>
                        </form>
                    </td>
    
                </tr>
            @endforeach
          
          
          
        </tbody>
    </table>

</div>
@endsection