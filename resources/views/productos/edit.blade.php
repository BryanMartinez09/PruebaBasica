@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Producto</h2>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $producto->id }}">
        
        <!-- Campo para el nombre del producto -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <!-- Campo para la descripción del producto -->
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ $producto->descripcion }}</textarea>
        </div>

        <!-- Campo para el precio del producto -->
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
        </div>

        <!-- Campo para la cantidad del producto -->
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}" required>
        </div>

        <!-- Botones para actualizar o cancelar -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<style>
    /* Estilo para el contenedor */
.container {
    max-width: 800px;
    background-color: #2d3748; /* Fondo oscuro */
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

/* Estilos para los encabezados */
h2 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 20px;
}

/* Estilos generales de los inputs */
.form-group {
    margin-bottom: 24px;
}

input, textarea {
    width: 100%;
    padding: 12px;
    background-color: #4a5568; /* Fondo más oscuro */
    color: #e2e8f0; /* Color de texto claro */
    border: 1px solid #4a5568;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

input:focus, textarea:focus {
    border-color: #3182ce; /* Azul cuando está en foco */
    box-shadow: 0 0 0 3px rgba(48, 130, 206, 0.2);
}

/* Estilos para los botones */
button, .btn {
    padding: 12px 24px;
    font-size: 1.1rem;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #3182ce;
    color: white;
}

.btn-primary:hover {
    background-color: #2b6cb0;
}

.btn-secondary {
    background-color: #4a5568;
    color: white;
}

.btn-secondary:hover {
    background-color: #2d3748;
}

/* Estilos para los botones de acción */
button:focus, .btn:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(48, 130, 206, 0.4);
}

/* Transiciones de hover */
button:hover, .btn:hover {
    opacity: 0.9;
}

/* Espaciado y disposición de los botones */
.flex {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

</style>
@endsection
