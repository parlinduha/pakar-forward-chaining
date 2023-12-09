@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Hasil Konsultasi</h1>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        Halo, <span class="text-primary"><b>{{ Auth::user()->name }}</b></span>, dari gejala yang Anda alami,
                        sistem mendeteksi
                        <h5>Kemungkinan Kerusakan :</h5>
                        <b class="text-danger">{{ $data['possibleKerusakan']['name'] }}</b>
                        <br>
                        <h5>Solusi :</h5>
                        <i class="text-success">{{ $data['possibleKerusakan']['solusi'] }}</i>
                        <br><br>
                        <h5>Edukasi :</h5>
                        @if ($data['possibleKerusakan']['education'])
                            <div class="row" style="display: flex">
                                <div class="col-sm-12">
                                    @if ($data['possibleKerusakan']['education']['video1'])
                                        <video id="video-1" width="420" height="240" controls>
                                            <source
                                                src="{{ asset('storage/videos/' . str_replace('\\', '/', $data['possibleKerusakan']['education']['video1'])) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                    @if ($data['possibleKerusakan']['education']['video2'])
                                        <video id="video-2" width="420" height="240" controls>
                                            <source
                                                src="{{ asset('storage/videos/' . str_replace('\\', '/', $data['possibleKerusakan']['education']['video2'])) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                    @if ($data['possibleKerusakan']['education']['video3'])
                                        <video id="video-3" width="420" height="240" controls>
                                            <source
                                                src="{{ asset('storage/videos/' . str_replace('\\', '/', $data['possibleKerusakan']['education']['video3'])) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                    @if ($data['possibleKerusakan']['education']['video4'])
                                        <video id="video-4" width="420" height="240" controls>
                                            <source
                                                src="{{ asset('storage/videos/' . str_replace('\\', '/', $data['possibleKerusakan']['education']['video4'])) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                    @if ($data['possibleKerusakan']['education']['video5'])
                                        <video id="video-5" width="420" height="240" controls>
                                            <source
                                                src="{{ asset('storage/videos/' . str_replace('\\', '/', $data['possibleKerusakan']['education']['video5'])) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                            </div>
                        @else
                            <li>Tidak ada data Education yang terkait.</li>
                        @endif
                        <br><br>
                        <a href="{{ route('konsultasi.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
