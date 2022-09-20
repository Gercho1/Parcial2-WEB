@extends('tema.app')

@section('title',"Editar tarea")

@section('contenido')
    <h3>
    Editar tarea <i>{{ $cliente->nombres }}</i>
    </h3>

    <form action="{{ route('cliente.update', $cliente) }}" method="POST">
        @method('put')
        <x-cliente-form-body :cliente=$cliente/>
    </form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection