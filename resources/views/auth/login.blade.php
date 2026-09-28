@extends('layouts.app')

@section('title', 'Inloggen')

@section('content')

<div class="card">
    <h1>Inloggen</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">E-mailadres</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Wachtwoord</label>

            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <button type="submit" class="btn">
            Inloggen
        </button>
    </form>
</div>

@endsection