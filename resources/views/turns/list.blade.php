@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Turnos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        @forelse($turns as $turn)
            <tr>
                <td>{{ $turn->id }}</td>
                <td>{{ $turn->document_number }}</td>
                <td>{{ $turn->date }}</td>
                <td>{{ $turn->status }}</td>
                <td>
                    <a href="{{ route('turns.edit', $turn->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('turns.destroy', $turn->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar turno?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No se registran turnos.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
