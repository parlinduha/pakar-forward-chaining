@extends('layout.guest')
@section('content')
    <!-- Content -->
    <div class="min-h-screen">
        <div class="lg:max-w-7xl lg:flex items-center mx-auto px-4 lg:px-14 pt-6 py-20 lg:py-24 gap-x-24">
            <!-- Detail Doctor -->
            <div class="lg:w-5/12  lg:border-r h-72 lg:h-[30rem] flex flex-col items-center justify-center text-center">
                @php
                    $userImage = Auth::user()->image;
                    $photoPath = $userImage ? '/storage/app/public/' . $userImage : null;
                    $defaultPhotoPath = asset('images/doctor-1.png');
                    $fullPhotoPath = $photoPath && file_exists(storage_path($photoPath)) ? asset($photoPath) : $defaultPhotoPath;
                @endphp

                <img src="{{ $fullPhotoPath }}" class="inline-block w-32 h-32 rounded-full bg-center object-cover object-top"
                    alt="user-image" />
                <div class="text-[#1E2B4F] text-2xl font-semibold mt-4">
                    {{ Auth::user()->name }}
                </div>

                <div class="text-[#AFAEC3] mt-1"> {{ Auth::user()->role }}</div>
            </div>


            <!-- Form Appointment -->
            <div class="lg:w-1/3  lg:mt-0">
                <div class="">
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">Profile Anda</h5>
                    <div class="flex items-center justify-between mt-5">
                        <div class="text-[#1E2B4F] font-medium">Nama</div>
                        <div class="text-[#AFAEC3] font-medium">{{ Auth::user()->name }}</div>
                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <div class="text-[#1E2B4F] font-medium">Email</div>
                        <div class="text-[#AFAEC3] font-medium">{{ Auth::user()->email }}</div>
                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <div class="text-[#1E2B4F] font-medium">Role</div>
                        <div class="text-[#AFAEC3] font-medium">{{ Auth::user()->role }}</div>
                    </div>
                </div>
                <hr style="margin-top: 40px">
                <div class="grid">
                    <a href="{{ route('edit.profile', Auth::user()->id) }}"
                        class="bg-[#0D63F3] rounded-full my-5 text-white text-lg font-medium px-10 py-3 text-center">Edit
                        profile</a>
                    <a href="{{ route('edit.passwordUser') }}"
                        class="bg-[#2AB49B] rounded-full mt-5 text-white text-lg font-medium px-10 py-3 text-center">Edit
                        password</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    @include('sweetalert::alert')
@endsection

{{-- <!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <!-- Konten Modal -->
        <p class="text-[#1E2B4F] text-xl mx-10 font-semibold leading-normal">
            List Gejala
        </p>
        <form action="{{ route('konsultasi.consult') }}" method="post">
            @csrf
            @foreach ($gejalas as $gejala)
                <label class="block mt-8">
                    <input type="checkbox" name="gejala_id[]" value="{{ $gejala->id }}" id="gejala{{ $gejala->id }}"
                        class=" rounded-full  py-2 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-3 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                        placeholder="Password" />
                    <span class="">{{ $gejala->code }} - {{ $gejala->name }}</span>
                </label>
            @endforeach
            <div class="grid">
                <button type="submit"
                    class="bg-[#0D63F3] rounded-full mt-5 text-white text-lg font-medium px-10 py-3 text-center">Proses</button>
            </div>
        </form>
    </div>
</div> --}}

@section('styles')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            border-radius: 10px !important;
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Temukan elemen modal dan tombol tutup
        var modal = document.getElementById("myModal");
        var closeButton = document.getElementsByClassName("close")[0];
        var openButton = document.getElementById("modal-open-button");

        // Ketika pengguna mengklik tombol buka, tampilkan modal
        openButton.onclick = function() {
            modal.style.display = "block";
        }

        // Ketika pengguna mengklik tombol tutup, sembunyikan modal
        closeButton.onclick = function() {
            modal.style.display = "none";
        }

        // Ketika pengguna mengklik di luar modal, sembunyikan modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
