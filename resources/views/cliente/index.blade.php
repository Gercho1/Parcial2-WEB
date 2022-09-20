@extends('tema.app')

@section('title',"Listado de clientes")

@section('contenido')
<h3>
    Listado de clientes
</h3>
<table id="data" class="table table-striped" style="width:100%" >
    <thead>
        <tr>
            <th>
                Nombres
            </th>
            <th>
                Apellidos
            </th>
            <th>
                Dirección
            </th>
            <th>
                Teléfono
            </th>
            <th>
                Sexo
            </th>
            <th>
                Correo
            </th>
            <th>
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($clientes as $cliente)
            <tr>
                <td>
                    {{ $cliente->nombres }}
                </td>
                <td>
                    {{ $cliente->apellidos }}
                </td>
                <td>
                    {{ $cliente->direccion }}
                </td>
                <td>
                    {{ $cliente->telefono }}
                </td>
                <td>
                    {{ $cliente->sexo }}
                </td>
                <td>
                    {{ $cliente->correo }}
                </td>
                <td>
                    <a href="{{ route('cliente.edit', $cliente) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#data').DataTable();
});
</script>
@endsection