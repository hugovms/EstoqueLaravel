@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de E-mail.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviando para o seu endereço de E-mail.') }}
                        </div>
                    @endif

                    {{ __('Por favor verifique se você recebeu em seu E-mail um link de verificação.') }}
                    {{ __('Se você não recebeu o email') }}, <a href="{{ route('verification.resend') }}">{{ __('Clique aqui para pedir novamente') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
