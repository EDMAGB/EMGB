{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
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
                        </div>
                        <div class="card-body">

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <x-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                    
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                                <div class="block">
                                    {{-- <x-label for="email" value="{{ __('Correo') }}" /> --}}
                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username"  placeholder="Correo" />
                                </div>
                    
                                <div class="mt-4">
                                    {{-- <x-label for="password" value="{{ __('Contraseña') }}" /> --}}
                                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Contraseña" />
                                </div>
                    
                                <div class="mt-4">
                                    {{-- <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" /> --}}
                                    <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña" />
                                </div>
                    
                                <div class="d-grid btnizquierda">
                                    <x-button  class="btnlogin" >
                                        {{ __('Restablecer') }}
                                    </x-button>
                                </div>
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

@endsection