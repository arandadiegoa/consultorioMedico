@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Editar Paciente</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('patients.update', $patient->id) }}">
        @csrf
        @method('PUT')

        {{-- Nombre --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $patient->name) }}"
                class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Document --}}
        <div class="mb-3">
            <label for="document_number" class="form-label">DNI:</label>
            <input type="text" name="document_number" id="document_number" value="{{ old('document_number', $patient->document_number) }}"
                class="form-control @error('document_number') is-invalid @enderror">
            @error('document_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $patient->email) }}"
                class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Phone --}}
        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $patient->phone) }}"
                class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

           {{-- birthdate --}}
        <div class="mb-3">
            <label for="phone" class="form-label">Fecha de nacimiento:</label>
            <input type="date" name="birthdate" id="birthdate" value="{{ old('phone', $patient->birthdate) }}"
                class="form-control @error('birthdate') is-invalid @enderror">
            @error('birthdate')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="{{ route('patients.list') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection