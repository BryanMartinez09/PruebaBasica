@extends('layouts.app')

@section('content')
<div class="container bg-gray-900 text-gray-100 rounded-lg p-6 shadow-lg">
    <h2 class="text-3xl font-semibold mb-4 text-center text-white">Detalles del Producto</h2>

    <div class="mb-4">
        <p class="text-xl"><strong>Nombre:</strong> <span class="text-gray-300">{{ $producto->nombre }}</span></p>
        <p class="text-xl"><strong>Descripción:</strong> <span class="text-gray-300">{{ $producto->descripcion }}</span></p>
        <p class="text-xl"><strong>Precio:</strong> <span class="text-gray-300">{{ $producto->precio }}</span></p>
        <p class="text-xl"><strong>Cantidad:</strong> <span class="text-gray-300">{{ $producto->cantidad }}</span></p>
        <p><strong>Fecha de Creación:</strong> {{ $producto->created_at->format('d-m-Y H:i') }}</p>
        <p><strong>Fecha de Actualización:</strong> {{ $producto->updated_at->format('d-m-Y H:i') }}</p>

    </div>

    <div class="text-center mb-6">
        <a href="{{ route('inventarios.create', $producto->id) }}" class="btn btn-success py-2 px-4 rounded-lg shadow-md hover:bg-green-600 focus:outline-none transition duration-300">Registrar Inventario</a>
    </div>

    

    <div class="text-center mt-6">
        <a href="{{ route('productos.index') }}" class="btn btn-secondary py-2 px-4 rounded-lg shadow-md hover:bg-gray-700 focus:outline-none transition duration-300">Volver</a>
    </div>
</div>
<style>
    /* Estilos personalizados para el diseño de detalles de producto */

.container {
    max-width: 800px;
    background-color: #1a202c; /* Fondo oscuro */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

h2 {
    font-size: 2rem;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 20px;
}

.text-xl {
    font-size: 1.25rem;
    color: #e2e8f0;
}

.text-white {
    color: white;
}

.text-gray-300 {
    color: #d1d5db;
}

.text-center {
    text-align: center;
}

.mb-6 {
    margin-bottom: 1.5rem;
}

.space-y-4 > * + * {
    margin-top: 1rem;
}

/* Estilos personalizados para los botones */
.btn-register-inventory {
    background-color: #38a169;
    transition: background-color 0.3s ease;
}

.btn-register-inventory:hover {
    background-color: #2f855a;
}

.btn-back {
    background-color: #4a5568;
    transition: background-color 0.3s ease;
}

.btn-back:hover {
    background-color: #2d3748;
}

.btn-register-inventory, .btn-back {
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 6px;
    cursor: pointer;
    text-align: center;
    display: inline-block;
}

.shadow-md {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.shadow-xl {
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.max-w-3xl {
    max-width: 48rem; /* Ancho máximo para el contenedor */
}

.mx-auto {
    margin-left: auto;
    margin-right: auto;
}

.mt-8 {
    margin-top: 2rem;
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}

.rounded-lg {
    border-radius: 0.5rem;
}

</style>
@endsection
