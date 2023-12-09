@extends('layout.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Basis pengetahuan</h1>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="{{ route('knowlidge.index') }}" class="btn btn-sm btn-danger"><i
                                class="fas fa fa-arrow-circle-left"></i> Back</a>
                        <div class="dropdown no-arrow">
                            <b>Edit Basis pengetahuan</b>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ route('knowlidge.update', $knowlidges->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Gejala</label>
                                <div class="col-sm-10">
                                    <select name="gejala_id" class="form-control @error('gejala_id') is-invalid @enderror"
                                        id="exampleFormControlSelect1">
                                        <option>Pilih Gejala</option>
                                        @foreach ($gejalas as $gejala)
                                            <option value="{{ $gejala->id }}"
                                                {{ $gejala->id === $knowlidges->gejala_id ? 'selected' : '' }}>
                                                {{ $gejala->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('gejala_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kerusakan</label>
                                <div class="col-sm-10">
                                    <select name="kerusakan_id"
                                        class="form-control @error('kerusakan_id') is-invalid @enderror"
                                        id="exampleFormControlSelect1">
                                        <option>Pilih Kerusakan</option>
                                        @foreach ($kerusakans as $kerusakan)
                                            <option value="{{ $kerusakan->id }}"
                                                {{ $kerusakan->id === $knowlidges->kerusakan_id ? 'selected' : '' }}>
                                                {{ $kerusakan->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('kerusakan_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-block btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('sweetalert::alert')
@endsection
