@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-primary"><img src="img/LogoLab-Circle.png" style="width: 280px;margin-left: auto;margin-right: auto;display: block; margin-top: 60px" alt=""></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}" class="user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder="{{ __('Masukkan Username') }}" value="{{ old('email') }}" required autofocus autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Masukkan Password') }}" required>
                                    </div>



                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <hr>


                                </form>





                                @if (Route::has('register'))
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">{{ __('Lupa Password') }}</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">{{ __('Buat Akun!') }}</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('utama') }}">{{ __('Kembali') }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
