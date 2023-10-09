@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Edukasi</h5>
                <a href="{{ route('edu.create') }}" class="btn btn-sm btn-primary"> Add Edukasi</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Videos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($education as $edu)
                                <tr>
                                    <td>{{ $edu->category }}</td>
                                    <td>
                                        @if ($edu->video1)
                                            <a href="#" class="video-link"
                                                data-src="{{ asset('storage/videos/' . $edu->video1) }}"
                                                data-title="{{ $edu->title }}" data-category="{{ $edu->category }}">
                                                {{ $edu->video1 }}
                                            </a><br>
                                        @endif
                                        @if ($edu->video2)
                                            <a href="#" class="video-link"
                                                data-src="{{ asset('storage/videos/' . $edu->video2) }}"
                                                data-title="{{ $edu->title }}" data-category="{{ $edu->category }}">
                                                {{ $edu->video2 }}
                                            </a><br>
                                        @endif
                                        @if ($edu->video3)
                                            <a href="#" class="video-link"
                                                data-src="{{ asset('storage/videos/' . $edu->video3) }}"
                                                data-title="{{ $edu->title }}" data-category="{{ $edu->category }}">
                                                {{ $edu->video3 }}
                                            </a><br>
                                        @endif
                                        @if ($edu->video4)
                                            <a href="#" class="video-link"
                                                data-src="{{ asset('storage/videos/' . $edu->video4) }}"
                                                data-title="{{ $edu->title }}" data-category="{{ $edu->category }}">
                                                {{ $edu->video4 }}
                                            </a><br>
                                        @endif
                                        @if ($edu->video5)
                                            <a href="#" class="video-link"
                                                data-src="{{ asset('storage/videos/' . $edu->video5) }}"
                                                data-title="{{ $edu->title }}" data-category="{{ $edu->category }}">
                                                {{ $edu->video5 }}
                                            </a><br>
                                        @endif
                                    </td>

                                    <td>
                                        {{-- <a href="{{ route('edu.edit', $edu->id) }}" class="btn btn-sm btn-primary"><i
                                                class="fas fa fa-edit"></i></a> --}}
                                        <form action="{{ route('edu.delete', $edu->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i
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

    <!-- Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <b>
                        <h4 class="modal-title" id="videoTitle"></h4>
                    </b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Kategori </span><span class="text-success" id="videoCategory"></span>
                    <video id="videoPlayer" width="100%" height="auto" controls>
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(".video-link").click(function() {
                var videoSrc = $(this).data("src");
                var videoCategory = $(this).data("category");
                var videoTitle = $(this).data("title"); // Get the video title

                $("#videoPlayer source").attr("src", videoSrc);
                $("#videoPlayer")[0].load();
                $("#videoTitle").text(videoTitle); // Set the modal title to the video title
                $("#videoCategory").text(videoCategory);

                $("#videoModal").modal("show");
            });
        });
    </script>
@endsection
