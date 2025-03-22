@extends('layouts.app')

@section('content')
<div class="container bg-gray-900 text-gray-100 rounded-lg p-8 shadow-xl max-w-3xl mx-auto mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-center text-white">Crear Nuevo Producto</h2>

    <form action="{{ route('productos.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="form-group">
            <label for="nombre" class="text-xl font-medium text-white">Nombre:</label>
            <input type="text" class="form-control p-4 rounded-lg bg-gray-800 text-gray-300 border border-gray-700 w-full focus:ring-2 focus:ring-green-500" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion" class="text-xl font-medium text-white">Descripción:</label>
            <textarea class="form-control p-4 rounded-lg bg-gray-800 text-gray-300 border border-gray-700 w-full focus:ring-2 focus:ring-green-500" id="descripcion" name="descripcion"></textarea>
        </div>
        <div class="form-group">
            <label for="precio" class="text-xl font-medium text-white">Precio:</label>
            <input type="number" step="0.01" class="form-control p-4 rounded-lg bg-gray-800 text-gray-300 border border-gray-700 w-full focus:ring-2 focus:ring-green-500" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="cantidad" class="text-xl font-medium text-white">Cantidad Inicial:</label>
            <input type="number" class="form-control p-4 rounded-lg bg-gray-800 text-gray-300 border border-gray-700 w-full focus:ring-2 focus:ring-green-500" id="cantidad" name="cantidad" required>
        </div>

        <div class="flex justify-center space-x-4 mt-6">
            <button type="submit" class="btn-submit py-3 px-6 rounded-lg bg-green-500 text-white shadow-md hover:bg-green-600 focus:outline-none transition duration-300">
                Guardar
            </button>

            <a href="{{ route('productos.index') }}" class="btn-cancel py-3 px-6 rounded-lg bg-gray-700 text-white shadow-md hover:bg-gray-600 focus:outline-none transition duration-300">
                Cancelar
            </a>
        </div>
    </form>
</div>
<style>
    /* Estilos personalizados para el formulario */

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

.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
    background-color: #2d3748;
    color: #e2e8f0;
    border: 1px solid #4a5568;
    padding: 12px 20px;
    border-radius: 8px;
    width: 100%;
}

.form-control:focus {
    border-color: #38a169; /* color verde */
    outline: none;
}

.text-white {
    color: white;
}

.text-gray-300 {
    color: #d1d5db;
}

.text-xl {
    font-size: 1.25rem;
}

.text-center {
    text-align: center;
}

.mb-6 {
    margin-bottom: 1.5rem;
}

.space-y-6 > * + * {
    margin-top: 1.5rem;
}

/* Estilos personalizados para los botones */
.btn-submit {
    background-color: #38a169;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: #2f855a;
}

.btn-cancel {
    background-color: #4a5568;
    transition: background-color 0.3s ease;
}

.btn-cancel:hover {
    background-color: #2d3748;
}

.btn-submit, .btn-cancel {
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

</style>
@endsection
