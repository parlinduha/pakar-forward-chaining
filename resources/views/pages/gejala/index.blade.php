@extends('layout.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gejala</h1>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="{{ route('gejala.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa fa-plus-circle"></i> Add Gejala</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Gejala</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gejalas as $gejala)
                                        <tr>
                                            <td>{{ $gejala->code }}</td>
                                            <td>{{ $gejala->name }}</td>
                                            <td>
                                                <a href="{{ route('gejala.edit', $gejala->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="fas fa fa-edit"></i></a>
                                                <form action="{{ route('gejala.destroy', $gejala->id) }}" method="POST"
                                                    style="display:inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger"><i
                                                            class="fas fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('sweetalert::alert')
@endsection
