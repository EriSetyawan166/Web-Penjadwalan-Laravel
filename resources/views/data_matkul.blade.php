@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Data Mata Kuliah') }}</h1>

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


    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Mata Kuliah
                </div>
                <div class="card-body">
                    <a href="{{ route('tambah-matkul')}}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode MatKul</th>
                                    <th>Nama Matkul</th>
                                    <th>SKS</th>
                                    <th>Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtmatkul as $dm)
                                <tr>
                                    <td>{{($dtmatkul->currentPage() - 1) * $dtmatkul->perPage() + $loop->iteration}}</td>
                                    <td>{{ $dm->kode_matkul}}</td>
                                    <td>{{ $dm->nama_matkul}}</td>
                                    <td>{{ $dm->jum_sks}}</td>
                                    <td>{{ $dm->prodi}}</td>
                                    <td class="d-flex justify-content-center"><a href="{{ url('update-matkul',$dm->id)}}" class="btn btn-warning mr-1"><i class="fa-solid fa-pen-to-square"></i> </a><a href="{{ url('delete-matkul', $dm->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{$dtmatkul->links()}}
                    </div>
                </div>
            </div>

            <!-- Project Card Example -->


            <!-- Color System -->


            <!-- Approach -->


        </div>
    </div>
    @include('sweetalert::alert')

@endsection
