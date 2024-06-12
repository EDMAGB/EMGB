{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
@extends('plantillas.inicioideas')
@section('titulo', 'Exponencial v2.0')
@section('contenido')

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-header"><span><img src="https://i.ibb.co/DkF1qXM/MVS-EXP-1.png" height="100"></span>
                    </div>
                    <div class="card-body">
                        <x-validation-errors class="mb-4" />

                        @session('status')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ $value }}
                            </div>
                        @endsession
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 btnizquierda">
                                <label class="monRegular">{{ __('Ingrese sus credenciales') }}</label>
                            </div>
                            <div class="mb-3">
                                {{-- <label for="email" class="form-label">{{ __('Correo') }}</label> --}}
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autofocus autocomplete="username"
                                    placeholder="Correo">
                            </div>
                            <div class="mb-3">
                                {{-- <label for="password" class="form-label">{{ __('Contraseña') }}</label> --}}
                                <input id="password" type="password" class="form-control" name="password" required
                                    autocomplete="current-password" placeholder="Contrseña">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">{{ __('Recuerdame') }}</label>
                            </div>
                            <div class="d-grid btnizquierda">
                                <button type="submit" class="btnlogin">{{ __('Ingresar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="{{ route('password.request') }}" class="text-ques ml-1">¿Olvidaste tu
                                contraseña?</a></p>
                        <p><a href="{{ route('register') }}" class="text-ques ml-1"> Regístrate </a>
                        </p>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
