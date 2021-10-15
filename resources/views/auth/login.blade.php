@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-black'])

@section('title', 'Realizar Login')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-11.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>Fenix Cargo</b> Painel administrativo</h4>
				<p>
					FÊNIX CARGO LOGÍSTICA E TRANSPORTES LTDA<br />
CNPJ: 43.079.594/0001-80<br />
ESCRITÓRIO: Av. Pedro Severino Júnior, 366 - Jardim Aeroporto - São Paulo/SP - CEP 04310060<br />
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<img src="{{asset('assets/img/logo/favicon.png')}}" width="30px"> <b>Fenix Cargo</b> Login
					<small>Acesso restrito</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in-alt"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
			<div class="login-content">
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
				<form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
					<div class="form-group m-b-15">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
						{{-- <input type="text" class="form-control form-control-lg" placeholder="Endereço de Email" required /> --}}
					</div>
					<div class="form-group m-b-15">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
						{{-- <input type="password" class="form-control form-control-lg" placeholder="Senha" required /> --}}
					</div>
					<div class="checkbox checkbox-css m-b-30">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
						{{-- <input type="checkbox" id="remember_me_checkbox" value="" />
						<label for="remember_me_checkbox">
						Lembrar login
						</label> --}}
					</div>
					<div class="login-buttons">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua Senha?') }}
                        </a>
                        @endif
                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
						{{-- <button type="submit" class="btn btn-success btn-block btn-lg">Logar-se</button> --}}
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Ainda não está registrado? Clique <a href="registro">aqui</a> para registrar.
					</div>
					<hr />
					<p class="text-center text-grey-darker mb-0">
						&copy; Fenix Cargo | Todos os direitos reservados. 2021
					</p>
				</form>
            </x-jet-authentication-card>
        </x-guest-layout>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end right-container -->
	</div>
	<!-- end login -->
@endsection
