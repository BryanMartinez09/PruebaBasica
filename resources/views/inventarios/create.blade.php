@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Inventario para {{ $producto->nombre }}</h2>
    <form action="{{ route('inventarios.store') }}" method="POST">
        @csrf
        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="entrada">Entrada</option>
                <option value="salida">Salida</option>
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

