@extends('layout.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Konsultasi</h1>
        </div>
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
               <div class="card">
                <div class="card-body">
                    Halo, <span class="text-primary"><b>{{ Auth::user()->name }}</b></span>
                    <h6>Selamat datang di expert system kerusakan komputer</h6>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Mulai Konsultasi
                    </button>

                </div>
               </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Gejala Kerusakan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('konsultasi.consult') }}" method="post">
                                    @csrf
                                    @foreach ($gejalas as $gejala)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="gejala_id[]"
                                                value="{{ $gejala->id }}" id="gejala{{ $gejala->id }}">
                                            <label class="form-check-label" for="gejala{{ $gejala->id }}">
                                                {{ $gejala->code }} - {{ $gejala->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <hr>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
