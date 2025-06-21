@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Turn registration</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="POST" action="{{ route('save.store') }}">
                    @csrf

                    {{-- Document_number --}}
                    <div class="mb-3">
                        <label for="document_number" class="form-label">Document number:</label>
                        <input type="text" name="document_number" id="document_number"
                            value="{{ old('document_number') }}"
                            class="form-control @error('document_number') is-invalid @enderror">
                        @error('document_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Date --}}
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" name="date" id="date" value="{{ old('date') }}"
                            class="form-control @error('date') is-invalid @enderror">
                        @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <input type="text" name="status" id="status" value="{{ old('status') }}"
                            class="form-control @error('status') is-invalid @enderror">
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
