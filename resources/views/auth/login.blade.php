@extends('layouts.app')

@section('title', 'Inloggen')

@section('content')

<div class="login-page">

    <div class="login-card">

        <div class="login-header">
            <span class="login-eyebrow">Welkom terug</span>
            <h1>Inloggen</h1>
            <p>Log in om verder te gaan.</p>
        </div>

        <form
            method="POST"
            action="{{ route('login.authenticate') }}"
            class="login-form"
        >
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">
                    E-mailadres
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="form-input"
                    placeholder="naam@example.nl"
                    required
                    autofocus
                >

                @error('email')
                    <span class="form-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">
                    Wachtwoord
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-input"
                    placeholder="Je wachtwoord"
                    required
                >

                @error('password')
                    <span class="form-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn login-button">
                Inloggen
            </button>
        </form>

    </div>

</div>

@endsection