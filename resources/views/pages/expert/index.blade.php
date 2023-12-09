@extends('layout.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Basis Pengetahuan</h1>

        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="{{ route('knowlidge.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa fa-plus-circle"></i> Add expert</a>
                        <a type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa fa-file-import"></i> Import excel
                        </a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Gejala</th>
                                        <th>Kerusakan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['knowlidges'] as $knowlidge)
                                        <tr>
                                            <td>
                                                @if ($knowlidge->gejala)
                                                    {{ $knowlidge->gejala->code }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if ($knowlidge->kerusakan)
                                                    {{ $knowlidge->kerusakan->code }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('knowlidge.edit', $knowlidge['id']) }}"
                                                    class="btn btn-sm btn-primary"><i class="fas fa fa-edit"></i></a>
                                                <form action="{{ route('knowlidge.destroy', $knowlidge['id']) }}"
                                                    method="POST" style="display:inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                        <i class="fas fa fa-trash"></i>
                                                    </button>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('knowlidge.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control" id="file" name="file"
                                aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
