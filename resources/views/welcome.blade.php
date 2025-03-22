@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido</h1>
    <p>Ir a la <a href="{{ route('productos.index') }}">lista de productos</a>.</p>
</div>
@endsection

