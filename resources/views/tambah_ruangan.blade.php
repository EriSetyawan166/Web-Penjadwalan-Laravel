@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Tambah Ruangan') }}</h1>

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
                <h3>Tambah Ruangan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tambah-ruangan')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="ruangan" name="ruangan" placeholder="Masukkan nama ruangan" class="form-control" required autocomplete="off">
                    </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
