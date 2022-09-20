@extends('tema.app')

@section('title',"Nueva tarea")

@section('contenido')
    <h3>
    Registrar cliente
    </h3>

    <form action="{{ route('cliente.store') }}" method="POST">
        <x-cliente-form-body/>
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