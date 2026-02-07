@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de mascotas</h1>

    @if($mascotas->count())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Apodo</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Última Cita</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>{{ $mascota->apodo }}</td>
                <td>{{ $mascota->edad }}</td>
                <td>{{ $mascota->peso }}</td>
                <td>{{ $mascota->ultimaCita }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mascotas->links() }}

    @else
    <div class="alert alert-info">No hay mascotas registradas</div>
    @endif
</div>
@endsection