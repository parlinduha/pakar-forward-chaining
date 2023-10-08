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
                                            Kerusakan Printer
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
        <section class="mt-32 bg-[#F9FBFC]">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
                <h3 class="text-2xl font-semibold">Categories</h3>
                <p class="text-[#A7B0B5] mt-2">Quick way to get your first experience</p>

                <!-- Card -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
                    @foreach ($topCategories as $category => $count)
                        <a href="#"
                            class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                            <h5 class="text-[#1E2B4F] text-lg font-semibold">{{ $category }}</h5>
                            <p class="text-[#AFAEC3] mt-1">{{ $count }} videos</p>
                        </a>
                    @endforeach



                    {{-- <a href="#"
                        class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Neurology</h5>
                        <p class="text-[#AFAEC3] mt-1">22 doctors</p>
                    </a>

                    <a href="#"
                        class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Dentist</h5>
                        <p class="text-[#AFAEC3] mt-1">74 doctors</p>
                    </a>

                    <a href="#"
                        class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Allergists</h5>
                        <p class="text-[#AFAEC3] mt-1">53 doctors</p>
                    </a>

                    <a href="#"
                        class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
                        <h5 class="text-[#1E2B4F] text-lg font-semibold">Cardiologists</h5>
                        <p class="text-[#AFAEC3] mt-1">794 doctors</p>
                    </a> --}}
                </div>
                <!-- End Card -->
            </div>
        </section>
        <!-- End Popular Categories -->

        <!-- Best Doctors -->
        {{-- <section class="mt-4 lg:mt-16">
            <div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
                <h3 class="text-[#1E2B4F] text-2xl font-semibold">Best Doctors</h3>
                <p class="text-[#A7B0B5] mt-2">Help your life much better</p>

                <!-- Card -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">
                    <a href="src/pages/subject-consultation.html" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('images/doctor-1.png') }}"
                                class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor 1">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Book
                                    Now</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Dr. Galih Pratama</div>
                                <div class="text-[#AFAEC3] mt-1">Cardiologist</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{ asset('/images/star.svg') }}" alt="Star">
                                <span class="block text-[#1E2B4F] font-medium">4.5</span>
                            </div>
                        </div>
                    </a>

                    <a href="src/pages/subject-consultation.html" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('images/doctor-2.png') }}"
                                class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor 1">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Book
                                    Now</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Dr. Anne Hulli</div>
                                <div class="text-[#AFAEC3] mt-1">Dentist</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{ asset('images/star.svg') }}" alt="Star">
                                <span class="block text-[#1E2B4F] font-medium">4.8</span>
                            </div>
                        </div>
                    </a>

                    <a href="src/pages/subject-consultation.html" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('images/doctor-3.png') }}"
                                class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor 1">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Book
                                    Now</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Dr. Masayoshi</div>
                                <div class="text-[#AFAEC3] mt-1">Neurologist</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{ asset('images/star.svg') }}" alt="Star">
                                <span class="block text-[#1E2B4F] font-medium">4.5</span>
                            </div>
                        </div>
                    </a>

                    <a href="src/pages/subject-consultation.html" class="group">
                        <div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
                            <img src="{{ asset('images/doctor-4.png') }}"
                                class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="Doctor 1">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
                                <span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Book
                                    Now</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <div>
                                <div class="text-[#1E2B4F] text-lg font-semibold">Dr. Shin Tai</div>
                                <div class="text-[#AFAEC3] mt-1">Dermatology</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{ asset('images/star.svg') }}" alt="Star">
                                <span class="block text-[#1E2B4F] font-medium">4.5</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Card -->
            </div>
        </section> --}}
        <!-- End Best Doctors -->
    </main>
@endsection
