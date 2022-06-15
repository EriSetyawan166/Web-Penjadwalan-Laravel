@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Jadwal Lab') }}</h1>

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
                <h3>Edit User</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('update-user',$du->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{-- @dd($du->id) --}}
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Masukkan Nama" class="form-control" value="{{ $du->name}}" required pattern="[a-zA-Z'-'\s]*">
                    </div>
                    <div class="form-group">
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control" value="{{ $du->username}}" required pattern="[0-9]+" maxlength="10">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Masukkan Email" class="form-control" value="{{ $du->email}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
