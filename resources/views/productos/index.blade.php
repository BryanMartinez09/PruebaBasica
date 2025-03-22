@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl text-gray-200 dark:text-gray-300 mb-6 text-center">Lista de Productos</h2>
    
    <!-- Botón de Crear Nuevo Producto -->
    <a href="{{ route('productos.create') }}" class="inline-block px-6 py-3 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white rounded-xl font-semibold shadow-lg hover:scale-105 transform transition duration-300 ease-in-out hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 mb-6">
        <i class="fa fa-plus-circle mr-2"></i> Crear Nuevo Producto
    </a>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success text-green-600 bg-green-100 p-4 rounded-md mb-6 dark:bg-green-900 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabla de Productos -->
    <div class="overflow-x-auto bg-gray-800 dark:bg-gray-900 rounded-lg shadow-lg">
        <table class="table-auto w-full text-left text-gray-300 dark:text-gray-200">
            <thead class="bg-gray-700 dark:bg-gray-800">
                <tr>
                    <th class="px-4 py-2 text-xs sm:text-sm md:text-base">Nombre</th>
                    <th class="px-4 py-2 text-xs sm:text-sm md:text-base">Precio</th>
                    <th class="px-4 py-2 text-xs sm:text-sm md:text-base">Cantidad</th>
                    <th class="px-4 py-2 text-xs sm:text-sm md:text-base">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr class="bg-gray-800 dark:bg-gray-900 border-b border-gray-700 dark:border-gray-600">
                        <td class="px-4 py-2 text-xs sm:text-sm md:text-base">{{ $producto->nombre }}</td>
                        <td class="px-4 py-2 text-xs sm:text-sm md:text-base">{{ $producto->precio }}</td>
                        <td class="px-4 py-2 text-xs sm:text-sm md:text-base">{{ $producto->cantidad }}</td>
                        <td class="px-4 py-2 flex flex-wrap justify-center space-x-2">
                            <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-sm btn-info text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300 mb-2 sm:mb-0 w-full py-2">
                                <i class="fa fa-eye"></i> Ver
                            </a>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-warning text-yellow-500 hover:text-yellow-600 dark:text-yellow-400 dark:hover:text-yellow-300 mb-2 sm:mb-0 w-full py-2">
                                <i class="fa fa-pencil-alt"></i> Editar
                            </a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger text-red-500 hover:text-red-600 dark:text-red-400 dark:hover:text-red-300 mb-2 sm:mb-0 w-full py-2" onclick="return confirm('¿Estás seguro?')">
                                    <i class="fa fa-trash-alt"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Estilos generales */
    .container {
        max-width: 100%;
        background-color: #1a202c; /* Fondo oscuro */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    h2 {
        font-size: 2.25rem;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 20px;
    }

    /* Estilos de la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    thead {
        background-color: #2d3748; /* Fondo más oscuro */
    }

    th {
        padding: 12px;
        text-align: left;
        color: #e2e8f0; /* Color de texto claro */
    }

    td {
        padding: 12px;
        color: #d1d5db;
    }

    tbody tr:hover {
        background-color: #4a5568; /* Resalta al pasar el mouse */
    }

    /* Botones */
    .btn {
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        display: inline-block;
        text-align: center;
        transition: background-color 0.3s ease;
        width: 100%;  /* Asegura que todos los botones tengan el mismo ancho */
        max-width: 200px; /* Limita el ancho máximo del botón */
    }

    .btn-info {
        background-color: #3182ce;
    }

    .btn-warning {
        background-color: #e8a500;
    }

    .btn-danger {
        background-color: #e53e3e;
    }

    .btn:hover {
        background-color: #2c5282; /* Efecto hover */
    }

    .btn-warning:hover {
        background-color: #c56e00;
    }

    .btn-danger:hover {
        background-color: #c53030;
    }

    /* Alertas */
    .alert {
        padding: 12px;
        background-color: #e3f9e5;
        border-radius: 8px;
        margin-bottom: 16px;
    }

    .alert-success {
        background-color: #f0fff4;
        color: #38a169;
    }

    /* Interactividad y transiciones */
    .transition {
        transition: all 0.3s ease;
    }

</style>
@endsection
