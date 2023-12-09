@extends('layout.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        </div>

        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-5 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-body text-center">
                        @php
                            $userImagePath = 'storage/' . Auth::user()->image;
                            // dd($userImagePath);
                            $photoPath = url($userImagePath);
                        @endphp
                        <img src="{{ $photoPath }}" alt="image" class="rounded" width="200" height="250">

                        <hr>
                        <form action="{{ route('admin.imageProfile', Auth::user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <input type="file" name="image" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Jane Doe">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home"
                                    type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Tentang</button>
                                <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile"
                                    type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Update</button>
                                <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact"
                                    type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Password</button>
                            </div>
                        </nav>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">

                                <table class="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>:</th>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th>:</th>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Role</th>
                                            <th>:</th>
                                            <td>{{ Auth::user()->role }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <form action="{{ route('admin.updateProfile', Auth::user()->id) }}" method="POST"
                                    class="mt-8 space-y-5">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                                            class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                            id="email" name="email">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <form action="{{ route('admin.passwordProfile', Auth::user()->id) }}" method="POST"
                                    class="mt-8 space-y-5">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="password">Password Baru</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
