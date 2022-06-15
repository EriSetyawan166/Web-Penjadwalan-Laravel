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
                <h3>Edit Ruangan</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('update-ruangan',$rg->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{-- @dd($mat->id) --}}
                    <div class="form-group">
                        <input type="text" id="ruangan" name="ruangan" placeholder="Masukkan Ruangan" class="form-control"value="{{ $rg->ruangan}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
