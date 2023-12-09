@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">Tambah Data Edukasi</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('edu.store') }}" enctype="multipart/form-data">
                            <div class="loading-spinner" id="loading-spinner"></div>
                            @csrf
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <select id="category" name="category" class="form-control" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <option value="Catridge">Catridge</option>
                                    <option value="Lampu Berkedip">Lampu Berkedip</option>
                                    <option value="Paperjam">Paperjam</option>
                                    <option value="Kabel Flexibel">Kabel Flexibel</option>
                                    <option value="Scanner">Scanner</option>
                                    <option value="Roller Paper">Roller Paper</option>
                                    <option value="Power Supply">Power Supply</option>
                                    <option value="Sensor Kertas">Sensor Kertas</option>
                                    <option value="Driver Software">Driver Software</option>
                                    <option value="Drum Error">Drum Error</option>
                                    <option value="Fotocopy">Fotocopy</option>
                                    <option value="Encoder">Encoder</option>
                                </select>
                            </div>
                            <div id="video-input-container">
                                <ol id="video-list">
                                    <button type="button" class="btn btn-sm btn-primary add-video-input">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <li class="form-group">
                                        <label for="video" class="sr-only">Video</label>
                                        <input name="videos[]" required type="file" class="form-control"
                                            placeholder="Video file">
                                    </li>
                                </ol>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('edu.index') }}" class="btn btn-danger"> Kembali</a>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .loading-spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid #007bff;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-left: -20px;
            margin-top: -20px;
            z-index: 9999;
            display: none;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector('form');
            var loadingSpinner = document.getElementById('loading-spinner');

            form.addEventListener('submit', function() {
                // Menampilkan animasi loading saat formulir disubmit
                loadingSpinner.style.display = 'block';
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addButton = document.querySelector('.add-video-input');
            var videoList = document.getElementById('video-list');

            addButton.addEventListener('click', function() {
                var newIndex = videoList.children.length + 1;
                var listItem = document.createElement('li');
                listItem.classList.add('form-group');
                listItem.innerHTML = `
                <button type="button" class="btn btn-sm btn-danger remove-video-input">
                    <i class="fas fa-minus"></i>
                </button>
                    <label for="video" class="sr-only">Video</label>
                    <input name="videos[]" required type="file" class="form-control" placeholder="Video file">
                `;

                videoList.appendChild(listItem);

                var removeButtons = document.querySelectorAll('.remove-video-input');
                removeButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        videoList.removeChild(listItem);
                        updateIndices();
                    });
                });

                updateIndices();

                function updateIndices() {
                    var videoItems = document.querySelectorAll('#video-list .form-group');
                    videoItems.forEach(function(item, index) {
                        var input = item.querySelector('input');
                        input.name = `videos[${index}]`;
                    });
                }
            });
        });
    </script>
@endsection
