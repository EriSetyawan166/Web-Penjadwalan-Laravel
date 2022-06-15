@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Tambah Data') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif



    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Tambah User</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tambah-user')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Masukkan Nama" class="form-control" required autocomplete="off" pattern="[a-zA-Z'-'\s]*">
                    </div>
                    <div class="form-group">
                        <input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control" required autocomplete="off" pattern="[0-9]+" maxlength="10">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Masukkan Email" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" id="password" name="password" placeholder="Masukkan Password" class="form-control" required autocomplete="off" minlength="8">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                    <div class="form-group">
                </form>
            </div>
        </div>
    </div>
@endsection
