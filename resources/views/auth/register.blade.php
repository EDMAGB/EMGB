@extends('plantillas.inicioideas')
@section('titulo', 'Exponencial v2.0')
@section('contenido')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-header"><span><img src="https://i.ibb.co/DkF1qXM/MVS-EXP-1.png"
                                height="100"></span>
                        <p class="text-ques">¿No tienes una cuenta? Crea tu cuenta ahora.</p>
                    </div>
                    <div class="card-body p-4">


                        <h5 class="auth-title">Crear cuenta</h5>
                        <x-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                {{-- <x-label for="name" value="{{ __('Name') }}" /> --}}
                                <x-input id="name" class="form-control" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre" />
                            </div>
                            <div class="mt-4">
                                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                                <x-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" placeholder="Correo" />
                            </div>

                           

                            <div class="mt-4">
                                {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                                <x-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="new-password" placeholder="Contraseña" />
                            </div>

                            <div class="mt-4">
                                {{-- <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                                <x-input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirma contraseña" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' =>
                                                        '<a target="_blank" href="' .
                                                        route('terms.show') .
                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                        __('Terms of Service') .
                                                        '</a>',
                                                    'privacy_policy' =>
                                                        '<a target="_blank" href="' .
                                                        route('policy.show') .
                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                        __('Privacy Policy') .
                                                        '</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                     --}}
                                {{-- <x-button class="btn btn-danger btn-block">
                                    {{ __('Register') }}
                                </x-button> --}}
                                <div class="d-grid btnizquierda">
                                    <button type="submit" class="btnlogin">{{ __('Registrar') }}</button>
                                </div>
                            </div>
                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
                {{-- 
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Ya tienes cuenta ?  <a href="pages-login.html" class="text-muted ml-1"><b class="font-weight-semibold">Ingresa</b></a></p>
                        </div> <!-- end col -->
                    </div> --}}
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
