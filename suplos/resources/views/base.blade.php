<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-contain">
        <div class="w-full bg-purple-500 flex justify-center h-20 text-white items-center text-lg">
            BIENES SUPLO
        </div>
        <div class="bg-white flex flex-row">
            <div class="w-80 bg-gray-200  p-4 h-screen">
                <form action="" method="post">
                    @csrf
                    <div class="flex justify-center m-2">
                        Filtros
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
                        <label for="precio">Precio</label>
                        <input type="number"  id="precio" name="precio">
                    </div>
                    <div class="flex justify-center flex-col m-2">
                        <button type="submit" class="p-2 bg-blue-500">Buscar</button>    
                    </div>
                </form>
                
            </div>
            <div class="w-full   justify-center items-center">
                <div class="flex flex-row   items-center">
                    
                    <a class="p-2 border border-gray-200 text-black m-2" href="{{ route('bienes-disponibles') }}">Bienes disponibles</a>
                    <a class="p-2 border border-gray-200e text-black m-2" href="{{ route('mis-bienes') }}">Mis bienes</a>
                        
                    
                </div>
                <div class="w-full h-screen bg-gray-200 m-2 flex  flex-col ">
                    @yield('content')
                </div>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>