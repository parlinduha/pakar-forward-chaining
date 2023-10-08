@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Edit Data Edukasi</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('edu.update', ['id' => $edu->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input id="title" type="text" value="{{ $edu->title }}" placeholder="Judul"
                                    name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <select id="category" name="category" class="form-control" required>
                                    <option value="" disabled>Pilih Kategori</option>
                                    <option value="Catridge" {{ $edu->category === 'Catridge' ? 'selected' : '' }}>Catridge
                                    </option>
                                    <!-- Tambahkan pilihan kategori lainnya sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="form-group" id="video-input-container">
                                <label for="video">Video (Format: mp4, mov, avi, wmv | Max: 200MB)</label>
                                @foreach (explode(',', $edu->video) as $videoName)
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="video{{ $loop->index + 1 }}"
                                                name="videos[]">
                                            <label class="custom-file-label"
                                                for="video{{ $loop->index + 1 }}">{{ $videoName }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-danger delete-video-input"
                                                type="button">Hapus</button>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="input-group mt-2" id="video-input-container">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            id="video{{ count(explode(',', $edu->video)) + 1 }}" name="videos[]">
                                        <label class="custom-file-label"
                                            for="video{{ count(explode(',', $edu->video)) + 1 }}">Choose file...</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary add-video-input"
                                            type="button">Tambah</button>
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
                // ...
            } else if (e.target.classList.contains('delete-video-input')) {
                // Hapus grup input video yang terkait
                var inputGroup = e.target.closest('.input-group');
                if (inputGroup) {
                    inputGroup.remove();
                }
            }
        });
    </script>
    <script>
        // Counter untuk menghasilkan ID unik untuk setiap input video
        var videoInputCounter = {{ count(explode(',', $edu->video)) }};

        // Menambah input video baru saat tombol "Tambah Field Input" diklik
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('add-video-input')) {
                videoInputCounter++;

                var videoInputContainer = document.getElementById('video-input-container');

                var inputGroup = document.createElement('div');
                inputGroup.classList.add('input-group', 'mt-2');

                var customFileDiv = document.createElement('div');
                customFileDiv.classList.add('custom-file');

                var inputElement = document.createElement('input');
                inputElement.type = 'file';
                inputElement.classList.add('custom-file-input');
                inputElement.id = 'video' + videoInputCounter;
                inputElement.name = 'videos[]';

                var labelElement = document.createElement('label');
                labelElement.classList.add('custom-file-label');
                labelElement.htmlFor = 'video' + videoInputCounter;
                labelElement.textContent = 'Choose file...';

                var inputGroupAppend = document.createElement('div');
                inputGroupAppend.classList.add('input-group-append');

                var deleteButton = document.createElement('button');
                deleteButton.classList.add('btn', 'btn-outline-danger', 'delete-video-input');
                deleteButton.textContent = 'Hapus';

                deleteButton.addEventListener('click', function() {
                    inputGroup.remove();
                });

                inputGroupAppend.appendChild(deleteButton);

                customFileDiv.appendChild(inputElement);
                customFileDiv.appendChild(labelElement);

                inputGroup.appendChild(customFileDiv);
                inputGroup.appendChild(inputGroupAppend);

                videoInputContainer.appendChild(inputGroup);
            }
        });
    </script>
@endsection
