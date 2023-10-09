@extends('layout.guest')
@section('content')
    <!-- Content -->
    <div class="min-h-screen">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Video Edukasi</h2>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @forelse ($educations as $edu)
                        @if ($edu->video1)
                            <div class="group relative" style="padding: 10px">
                                <div
                                    class="aspect-w-16 aspect-h-9 w-full overflow-hidden rounded-md bg-gray-400 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <video class="w-full h-full object-cover" controls>
                                        <source src="{{ asset('storage/videos/' . $edu->video1) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $edu->title }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ $edu->category }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <p class="text-gray-500">No data available</p>
                    @endforelse


                </div>
            </div>
        </div>

    </div>
    <!-- End Content -->
@endsection
