@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-black'])

@section('title', 'Realizar Login')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/assets/img/login-bg/home-header.png)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>Fenix Cargo</b> Painel administrativo</h4>
				<p>FÊNIX CARGO LOGÍSTICA E TRANSPORTES LTDA<br />
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
					<img src="{{asset('assets/img/logo/favicon.png')}}" width="30px"> <b>Fenix Cargo</b>
					<small>Recuperar Senha</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in-alt"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
            <x-guest-layout>
                <x-jet-authentication-card>
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
                    </div>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="block">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button>
                                {{ __('Enviar link para redefinir senha') }}
                            </x-jet-button>
                        </div>
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
