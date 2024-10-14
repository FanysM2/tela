{{-- resources/views/users/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $user->name }}</h1>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Rol:</strong> {{ $user->role }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Regresar</a>
</div>
@endsection
