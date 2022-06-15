@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Data Users') }}</h1>

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
                    Data User
                </div>
                <div class="card-body">
                    <a href="{{ route('tambah-user')}}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Hak Akses</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtuser as $du)
                                <tr>
                                    <td>{{($dtuser->currentPage() - 1) * $dtuser->perPage() + $loop->iteration}}</td>
                                    <td>{{ $du->name}}</td>
                                    <td>{{ $du->username}}</td>
                                    <td>{{ $du->email}}</td>
                                    <td>{{ $du->hak_akses}}</td>
                                    @if ($du->hak_akses == "Admin")
                                    <td class="d-flex justify-content-center"><a href="{{ url('update-user',$du->id)}}" class="btn btn-warning mr-1"><i class="fa-solid fa-pen-to-square"></i> </a></td>
                                    @else
                                    <td class="d-flex justify-content-center"><a href="{{ url('update-user',$du->id)}}" class="btn btn-warning mr-1"><i class="fa-solid fa-pen-to-square"></i> </a><a href="{{ url('delete-user', $du->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{$dtuser->links()}}
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
