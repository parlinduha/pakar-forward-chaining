@extends('layout.guest')
@section('content')
    <main class="min-h-screen">
        <!-- Hero -->
        <section class="relative mt-12">
            <!-- Hero Image -->
            <div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0" aria-hidden="true">
                <img src="{{ asset('images/bg-2.jpg') }}" class="bg-cover bg-center object-cover object-center max-h-[580px]"
                    alt="Hero Image" />
            </div>

            <!-- Hero Description -->
            <div class="relative mx-auto max-w-7xl px-4 lg:px-14 lg:py-16">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-6">

                        <!-- Label New -->
                        <h1>
                            <div class="flex items-center">
                                <span class="mt-6 block text-4xl font-semibold sm:text-5xl">
                                    <span class="block text-[#1E2B4F] leading-normal">Selamat Datang <br />
                                    </span>
                                    <span class=" block text-xl font-semibold sm:text-xl">
                                        <span class="block text-[#1E2B4F] leading-normal">di Sistem Pakar Pendeteksi
                                            <br> Kerusakan Printer
                                            <br />
                                        </span>
                                    </span>
                                </span>
                        </h1>
                        <!-- End Label New -->

                        <!-- Text -->
                        <div class="flex flex-wrap gap-16 mt-8">
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('/images/service.svg') }}" alt="service icon" />
                                </div>
                                <div>
                                    <h5 class="text-[#1E2B4F] text-lg font-medium">
                                        Studi Kasus
                                    </h5>
                                    <p class="text-[#AFAEC3]">SDN PELA Mampang 03 Pagi</p>
                                </div>
                            </div>
                        </div>
                        <!-- Text -->

                        <!-- CTA Button -->
                        <div class="grid lg:flex flex-wrap mt-20 gap-5">
                            <a href="{{ route('diagnosa.index') }}"
                                class="text-white text-lg font-medium text-center bg-[#0D63F3] rounded-full px-12 py-3">
                                Diagnosa
                            </a>
                        </div>
                        <!-- CTA Button -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero -->


        <!-- Popular Categories -->
        <section class="mt-22 bg-[#F9FBFC]">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <a href="{{ route('edukasi.index') }}">
                    <h3 class="text-2xl font-semibold">Katalog Kerusakan Printer</h3>
                </a>
                <!-- Card -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols gap-3 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                    {{-- @foreach ($categories as $category)
                        <div class="video-container">

                            <video
                                class="bg-white  video rounded-xl mt-3 transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                                <source src="{{ asset('storage/videos/' . $category->video1) }}" type="video/mp4">
                                <source src="{{ asset('storage/videos/' . $category->video2) }}" type="video/mp4">
                                <source src="{{ asset('storage/videos/' . $category->video3) }}" type="video/mp4">
                                <source src="{{ asset('storage/videos/' . $category->video4) }}" type="video/mp4">
                                <source src="{{ asset('storage/videos/' . $category->video5) }}" type="video/mp4">
                                Maaf, browser Anda tidak mendukung tag video.
                            </video>
                            <h2>{{ $category->category }}</h2>
                        </div>
                    @endforeach --}}
                    <img src="{{ asset('Gambar Thumbnail/Gambar1.jpg') }}" alt="">
                    <img src="{{ asset('Gambar Thumbnail/gambar2.jpg') }}" alt="">
                    <img src="{{ asset('Gambar Thumbnail/Gambar3.jpg') }}" alt="">
                    <img src="{{ asset('Gambar Thumbnail/Gambar4.jpg') }}" alt="">
                    <img src="{{ asset('Gambar Thumbnail/Gambar5.jpg') }}" alt="">
                    <img src="{{ asset('Gambar Thumbnail/Gambar6.jpg') }}" alt="">
                </div>


            </div>
            <!-- End Card -->
            </div>
        </section>
        <!-- End Popular Categories -->

    </main>
@endsection
