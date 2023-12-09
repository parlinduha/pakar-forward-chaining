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
                            <div class="group relative video-thumbnail" style="padding: 10px"
                                data-video-url="{{ asset('storage/videos/' . $edu->video1) }}">
                                <div
                                    class="aspect-w-16 aspect-h-9 w-full overflow-hidden rounded-md bg-gray-400 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <video class="w-full h-full object-cover">
                                        <source src="{{ asset('storage/videos/' . $edu->video1) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <small style="color: red">{{ $edu->category }}</small>
                                <p class="text-gray-500">{{ basename($edu->video1) }}</p>
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


    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!-- Konten Modal -->
            <p class="text-[#1E2B4F] text-xl mx-10 font-semibold leading-normal">
                Video
            </p>
        </div>
    </div>
@endsection

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
            width: 50%;
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
        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById("myModal");
            var closeButton = document.getElementsByClassName("close")[0];
            var videoThumbnails = document.querySelectorAll(".video-thumbnail");

            videoThumbnails.forEach(function(thumbnail) {
                thumbnail.addEventListener("click", function() {
                    var videoUrl = thumbnail.getAttribute("data-video-url");
                    var videoFileName = basename(videoUrl);
                    var videoModal = document.createElement("video");
                    videoModal.setAttribute("controls", "controls");
                    videoModal.setAttribute("class", "w-full h-full object-cover");
                    videoModal.innerHTML = '<source src="' + videoUrl + '" type="video/mp4">' +
                        'Your browser does not support the video tag.';

                    var modalContent = document.querySelector(".modal-content");
                    modalContent.innerHTML = ""; // Clear previous content
                    modalContent.appendChild(videoModal);

                    // Set modal title as video file name
                    var modalTitle = document.createElement("p");
                    modalTitle.className =
                        "text-[#1E2B4F] text-xl mx-10 font-semibold leading-normal";
                    modalTitle.innerText = videoFileName;
                    modalContent.appendChild(modalTitle);

                    modal.style.display = "block";
                });
            });

            closeButton.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            // Function to get basename from a URL
            function basename(path) {
                return path.split('/').reverse()[0];
            }
        });
    </script>
@endsection
