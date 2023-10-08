    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    </head>

    <body>
        <div class="min-h-screen">
            <div class="grid lg:grid-cols-2">
                <!-- Form-->
                <div class="px-4 lg:px-[91px] pt-10">

                    <!-- Logo Brand -->
                    <a href="{{ route('welcome.index') }}" class="flex-shrink-0 flex items-center">
                        <img class="h-12 lg:h-16 w-auto" src="{{ asset('images/logo.png') }}" alt="Meet Doctor Logo" />
                    </a>

                    <div class="flex flex-col justify-center py-14 h-screen lg:min-h-screen">
                        <h2 class="text-[#1E2B4F] text-2xl font-semibold leading-normal">
                            Selamat Datang Kembali <br />
                        </h2>
                        <div class="mt-12">

                            <!-- Form input -->
                            <form action="" class="grid gap-6" action="{{ route('actionLogin') }}" method="POST">
                                @csrf
                                <label class="block">
                                    <input type="email" name="email"
                                        class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                        placeholder="Email Address" />
                                </label>

                                <label class="block">
                                    <input type="password" name="password"
                                        class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                        placeholder="Password" />
                                </label>

                                <div class="mt-10 grid gap-6">
                                    <button type="submit"
                                        class="text-center text-white text-lg font-medium bg-[#0D63F3] px-10 py-4 rounded-full">
                                        Sign In
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End Form -->

                <!-- Qoute -->
                <div class="hidden sm:block bg-[#F9FBFC]">
                    <div class="flex flex-col justify-center h-full px-24 pt-10 pb-20">
                        <div class="relative">
                            <div class="relative top-0 -left-5 mb-7">
                                <img src="{{ asset('images/bg.jpeg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Qoute -->
            </div>
        </div>
        @include('sweetalert::alert')
    </body>

    </html>
