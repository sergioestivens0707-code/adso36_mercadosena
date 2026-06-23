@extends('layout')
@section('title','Categorías')
@section('content')
<h3 class="mt-4">Listado de Categorías</h3>
<div class="text-end">
    <a href="{{ url('categorias/create') }}" class="btn btn-primary">Nuevo</a>
</div>
@if(session('type'))
    <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
        <strong>Noticia:</strong> {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($datos as $categoria)
            <tr>
                <td>
                    {{ $categoria->nombre }}
                </td>
                <td>
                    {{ $categoria->descripcion }}
                </td>
                <td>
                    <a href="{{ route('categorias.edit',$categoria->id) }}" class="btn btn-info">
                        <img src="{{ url('img/iconos-editar.gif') }}" width="25">
                    </a>

                    <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('¿Quiere eliminar el registro?')">
                            <img src="{{ url('img/iconos-borrar-100.png') }}" width="25">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop()