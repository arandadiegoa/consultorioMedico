@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Actualizar Turno</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('turns.update', $turn->id) }}">
            @csrf
            @method('PUT')

            {{-- Document
            disabled: evita que el usuario edite el campo visible.
            hidden: garantiza que el valor sí se envíe al backend para validación o guardado.
            --}}
            <div class="mb-3">
                <label for="document_number" class="form-label">Dni:</label>
                <input type="text" name="document_number" id="document_number"
                    value="{{ old('document_number', $turn->document_number) }}" class="form-control" disabled>
                 <input type="hidden" name="document_number" value="{{ $turn->document_number }}">
                </div>

            {{-- Date --}}
            <div class="mb-3">
                <label for="date" class="form-label">Fecha:</label>
                <input type="date" name="date" id="date" value="{{ old('email', $turn->date) }}"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- State --}}
            <div class="mb-3">
                <label for="status" class="form-label">Estado:</label>
                <select class="form-select" name="status" id="status">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="confirmado" {{ $turn->status == 'confirmado' ? 'selected' : '' }}>confirmado</option>
                    <option value="pendiente" {{ $turn->status == 'pendiente' ? 'selected' : '' }}>pendiente</option>
                    <option value="cancelado" {{ $turn->status== 'cancelado' ? 'selected' : '' }}>cancelado</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('turns.list') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
