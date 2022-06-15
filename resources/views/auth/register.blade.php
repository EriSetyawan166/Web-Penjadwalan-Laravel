@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-primary "><img src="img/LogoLab-Circle.png" style="width: 280px;margin-left: auto;margin-right: auto;display: block; margin-top: 120px" alt=""></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Registrasi') }}</h1>
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

                                <form method="POST" action="{{ route('register') }}" class="user">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <input type="text" autocomplete="off" class="form-control form-control-user" name="name" placeholder="{{ __('Masukkan Nama') }}" value="{{ old('name') }}" required autofocus pattern="[a-zA-Z'-'\s]*" >
                                    </div>

                                    {{-- <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="last_name" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                                    </div> --}}

                                    <div class="form-group">
                                        <input type="text" autocomplete="off" class="form-control form-control-user" name="username" placeholder="{{ __('Masukkan Username') }}" value="{{ old('username') }}" required pattern="[0-9]+" maxlength="10">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" autocomplete="off" name="email" placeholder="{{ __('Masukkan Email') }}" value="{{ old('email') }}" required >
                                    </div>


                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Masukkan Password') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="{{ __('Konfirmasi Password') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Registrasi') }}
                                        </button>
                                    </div>
                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">
                                        {{ __('Sudah punya akun? Login!') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
