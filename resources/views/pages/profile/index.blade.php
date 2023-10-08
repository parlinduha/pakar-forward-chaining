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
                        <img src="{{ asset('images/doctor-1.png') }}" alt="" class="rounded" width="200"
                            height="250">
                        <hr>
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <input type="file" class="form-control mb-2" id="inlineFormInput"
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
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="#" class="btn btn-sm btn-success">update</a>
                        <a href="#" class="btn btn-sm btn-warning">password</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection
