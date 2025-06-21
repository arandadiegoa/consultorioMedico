@extends('layouts.app')

@section('title')
    <h1 class="text-center my-4">Panel</h1>
@endsection

@section('content')
    <div class="container" style="display: flex; flex-direction:column; gap: 10px">
        <div>
            <a class="btn btn-primary" href="{{ route('patients.list') }}" role="button">Pacientes</a>
            <a class="btn btn-primary" href="{{ route('turns.list') }}" role="button">Turnos</a>
        </div>
        @foreach ($patients as $patient)
            <div class="card mb-4">
                <div class="card-header">
                    <strong>{{ $patient->name }}</strong> - DNI: {{ $patient->document_number }}
                </div>
                <div class="card-body">
                    @if ($patient->turns->count())
                        <ul class="list-group">
                            @foreach ($patient->turns as $turn)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Fecha: {{ $turn->date }} |
                                    Estado:
                                    <span
                                        class="badge bg-{{ $turn->status === 'pendiente' ? 'warning' : ($turn->status === 'confirmado' ? 'success' : 'danger') }}">
                                        {{ ucfirst($turn->status) }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-muted">No registra turno.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
