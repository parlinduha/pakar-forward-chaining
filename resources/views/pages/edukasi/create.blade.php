@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">Tambah Data Edukasi</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('edu.store') }}" enctype="multipart/form-data">
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
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="videos[]" required>
                                        <label class="custom-file-label">Choose file...</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-video-input" type="button">Tambah
                                            Video</button>
                                    </div>
                                </div>
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
@section('scripts')
    <script>
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('add-video-input')) {
                var container = document.getElementById('video-input-container');
                var inputGroup = document.createElement('div');
                inputGroup.classList.add('input-group', 'mb-3');

                var customFile = document.createElement('div');
                customFile.classList.add('custom-file');

                var input = document.createElement('input');
                input.type = 'file';
                input.classList.add('custom-file-input');
                input.name = 'videos[]';
                input.required = true;

                var label = document.createElement('label');
                label.classList.add('custom-file-label');
                label.textContent = 'Choose file...';

                customFile.appendChild(input);
                customFile.appendChild(label);

                var appendDiv = document.createElement('div');
                appendDiv.classList.add('input-group-append');

                var addButton = document.createElement('button');
                addButton.classList.add('btn', 'btn-outline-secondary', 'add-video-input');
                addButton.type = 'button';
                addButton.textContent = 'Tambah Video';

                appendDiv.appendChild(addButton);

                inputGroup.appendChild(customFile);
                inputGroup.appendChild(appendDiv);

                container.appendChild(inputGroup);
            }
        });
    </script>
@endsection
