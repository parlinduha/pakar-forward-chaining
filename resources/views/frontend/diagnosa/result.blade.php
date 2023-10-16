@extends('layout.guest')
@section('content')
    <!-- Content -->
    <div class="min-h-screen">
        <div class="max-w-7xl grid lg:grid-cols-12 mx-auto pt-14 lg:pt-20 pb-20 lg:pb-28 lg:divide-x px-4 lg:px-16">
            <!-- Detail Payment -->
            <div class="lg:col-span-7 lg:pl-8 lg:pr-20">
                <h5 class="text-[#1E2B4F] text-2xl font-semibold">Hasil diagnosa anda</h5><br><br><br>
                <!-- Doctor Information -->
                <div class="flex flex-wrap items-center space-x-5">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('images/teknisi.jpg') }}"
                            class="w-20 h-20 rounded-full bg-center object-cover object-top" alt="Doctor 1" />
                    </div>

                    <div class="flex-1 space-y-1">
                        @php
                            use Illuminate\Support\Facades\DB;
                            $adminUser = DB::table('users')
                                ->where('role', 'admin')
                                ->first();
                        @endphp

                        <div class="text-[#1E2B4F] text-lg font-semibold">
                            {{ $adminUser->name }}
                        </div>
                        <div class="text-[#AFAEC3]"> Teknisi pakar</div>


                        <div class="lg:hidden flex items-center gap-x-2">
                            <div class="flex items-center gap-2">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                        fill="#FFB340" />
                                </svg>

                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                        fill="#FFB340" />
                                </svg>

                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                        fill="#FFB340" />
                                </svg>

                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                        fill="#FFB340" />
                                </svg>

                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                        fill="#FFB340" />
                                </svg>
                            </div>
                            <span class="text-[#1E2B4F] font-medium"> (12,495) </span>
                        </div>
                    </div>

                    <div class="hidden lg:flex items-center gap-x-2">
                        <div class="flex items-center gap-2">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                    fill="#FFB340" />
                            </svg>

                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                    fill="#FFB340" />
                            </svg>

                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                    fill="#FFB340" />
                            </svg>

                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                    fill="#FFB340" />
                            </svg>

                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                    fill="#FFB340" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Appoinment Information -->
                <div class="mt-16">
                    <h5 class="text-[#4f1e1e] text-lg font-semibold">Gejala anda</h5>
                    <div class="flex items-center justify-between mt-5">
                        <div class="text-[#AFAEC3] font-medium">
                            <ol class="list-decimal">
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($selectedGejalaNames as $gejalaName)
                                    <li>{{ $count }}. {{ $gejalaName }}</li>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="mt-16">
                    <h5 class="text-[#4f1e1e] text-lg font-semibold">Kemungkinan kerusakan</h5>
                    <div class="flex items-center justify-between mt-5">
                        <div class="text-red font-medium">{{ $data['possibleKerusakan']['name'] }}</div>
                    </div>
                </div>



                <div class="mt-16">
                    <h5 class="text-[#1E2B4F] text-lg font-semibold">
                        Solusi
                    </h5>

                    <div class="flex items-center justify-between mt-5">
                        <div class="text-[#AFAEC3] font-medium"> {{ $data['possibleKerusakan']['solusi'] }}</div>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-5 lg:pl-20 lg:pr-7 mt-10 lg:mt-0">



                {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-2 gap-5 py-6">
                    @if ($data['possibleKerusakan']['education']['video1'])
                        <div
                            class="w-full @if (!$data['possibleKerusakan']['education']['video2'] && !$data['possibleKerusakan']['education']['video3'] && !$data['possibleKerusakan']['education']['video4'] && !$data['possibleKerusakan']['education']['video5']) sm:col-span-2 md:col-span-4 lg:col-span-2 @endif">
                            <video id="tutorial-video"width="100%" height="auto" controls class="rounded-xl">
                                <source
                                    src="{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video1']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif

                    @if ($data['possibleKerusakan']['education']['video2'])
                        <div class="w-full">
                            <video id="tutorial-video"width="100%" height="auto" controls class="rounded-xl">
                                <source
                                    src="{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video2']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif

                    @if ($data['possibleKerusakan']['education']['video3'])
                        <div class="w-full">
                            <video id="tutorial-video"width="100%" height="auto" controls class="rounded-xl">
                                <source
                                    src="{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video3']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif

                    @if ($data['possibleKerusakan']['education']['video4'])
                        <div class="w-full">
                            <video id="tutorial-video"width="100%" height="auto" controls class="rounded-xl">
                                <source
                                    src="{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video4']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif

                    @if ($data['possibleKerusakan']['education']['video5'])
                        <div class="w-full">
                            <video id="tutorial-video"width="100%" height="auto" controls class="rounded-xl">
                                <source
                                    src="{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video5']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                </div> --}}
                <div class="mt-10 grid">
                    <a href="{{ route('exportPdf') }}" class="bg-red text-white px-10 py-3 rounded-full text-center"
                        x-show="payment.length">
                        Print PDF
                    </a>
                </div>

                <div class="mt-4 grid">
                    <a href="{{ route('diagnosa.index') }}"
                        class="bg-[#0D63F3] text-white px-10 py-3 rounded-full text-center" x-show="payment.length">
                        Back Diagnosa
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ambil elemen video
            var video = document.getElementById("tutorial-video");

            // Daftar video yang tersedia
            var videoSources = [
                "{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video1']) }}",
                "{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video2']) }}",
                "{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video3']) }}",
                "{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video4']) }}",
                "{{ asset('storage/videos/' . $data['possibleKerusakan']['education']['video5']) }}"
            ];

            // Fungsi untuk mengganti video
            function changeVideo(index) {
                video.src = videoSources[index];
                video.load(); // Muat ulang video
                video.play(); // Putar video secara otomatis
            }

            // Panggil fungsi pertama kali
            changeVideo(0);

            // Mengganti video saat thumbnail di klik
            $(".video-thumbnail").click(function() {
                var index = $(this).data("index");
                changeVideo(index);
            });
        });
    </script>
@endsection
