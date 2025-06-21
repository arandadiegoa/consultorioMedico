@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Turns list</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Document number</th>
                <th>Date</th>
                <th>Status</th>
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
                    <a href="{{ route('turns.edit', $turn->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('turns.destroy', $turn->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Turn delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No turn register.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
