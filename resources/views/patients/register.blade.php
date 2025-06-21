@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Registro de Pacientes</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="POST" action="{{ route('register.store') }}">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Document_number --}}
                    <div class="mb-3">
                        <label for="document_number" class="form-label">DNI:</label>
                        <input type="text" name="document_number" id="document_number"
                            value="{{ old('document_number') }}"
                            class="form-control @error('document_number') is-invalid @enderror">
                        @error('document_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Correo --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- phone --}}
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono:</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                            class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- birthdate --}}
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" name="birthdate" id="birthdate"
                            class="form-control @error('birthdate') is-invalid @enderror">
                        @error('birthdate')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
