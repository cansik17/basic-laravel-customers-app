@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Email adresinizi Doğrulayın') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Doğrulama kodu mail adresinize gönderilmiştir') }}
                        </div>
                    @endif
   
                    {{ __('Devam etmeden önce, doğrulama kodunu alabilmek için lütfen mail adresinizi doğrulayınız.') }}
                    {{ __('Mail gelmediyse ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('istek yenilemek için buraya tıklayınız') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
