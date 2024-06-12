{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
@extends('plantillas.inicioideas')
@section('titulo', 'Exponencial v2.0')
@section('contenido')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-header"><span><img src="https://i.ibb.co/DkF1qXM/MVS-EXP-1.png"
                                height="100"></span>
                        <p class="text-ques">¿Olvidaste tu contraseña?
                            Simplemente háganos saber su dirección de correo electrónico y le enviaremos un
                            enlace para
                            restablecer su contraseña que le permitirá elegir una nueva.</p>
                    </div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group mb-3">
                                {{-- <label for="email" value="{{ __('Correo') }}" /> --}}
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autofocus autocomplete="username"
                                    placeholder="Correo">
                            </div>

                            <br>
                            <div class="d-grid btnizquierda">
                                <button type="submit"
                                    class="btnlogin">{{ __('Restablecer') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
