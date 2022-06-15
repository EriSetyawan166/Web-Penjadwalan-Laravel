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
                <h3>Tambah Jadwal</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('simpan')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%" name="idmatkul" id="idmatkul" required>
                            <option selected disabled value="">Pilih Matkul</option>
                            @foreach ($mat as $item)
                            <option value="{{ $item->id}}">{{ $item->nama_matkul}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" id="kelompok" name="kelompok" placeholder="Masukkan kelompok" class="form-control" maxlength="2" required autocomplete="off" pattern="[a-zA-Z'-'\s]*">
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%" name="idnpp" id="idnpp" required>
                            <option selected disabled value="">Pilih Dosen</option>
                            @foreach ($dos as $item)
                            <option value="{{ $item->id}}">{{ $item->nama_dosen}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%" name="idruangan" id="idruangan" required>
                            <option selected disabled value="">Pilih Ruangan</option>
                            @foreach ($ruang as $item)
                            <option value="{{ $item->id}}">{{ $item->ruangan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" id="tgl" name="tgl" placeholder="Masukkan tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="time" id="jam_mulai" name="jam_mulai" placeholder="Masukkan jam Mulai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="time" id="jam_selesai" name="jam_selesai" placeholder="Masukkan nama dosen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
