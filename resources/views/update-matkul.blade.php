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
                <h3>Edit Matkul</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('update-matkul',$mat->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{-- @dd($mat->id) --}}
                    <div class="form-group">
                        <input type="text" id="kode_matkul" name="kode_matkul" placeholder="Masukkan kode matkul" class="form-control" maxlength="5" value="{{ $mat->kode_matkul}}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama_matkul" name="nama_matkul" placeholder="Masukkan nama matkul" class="form-control" value="{{ $mat->nama_matkul}}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="jum_sks" name="jum_sks" placeholder="Masukkan jumlah sks" class="form-control" value="{{ $mat->jum_sks}}" required pattern="[0-9]+" maxlength="1">
                    </div>
                    <div class="form-group">
                        <input type="text" id="prodi" name="prodi" placeholder="Masukkan prodi" class="form-control" value="{{ $mat->prodi}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
