@extends('layout.app')

@section('content')
    <!-- Konten Anda -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">History</h1>
        </div>

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="{{ route('export.pdf') }}" class="btn btn-primary">Export to PDF</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Hasil</th>
                                        <th>Solusi Kerusakan</th>
                                        <th>Create</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formattedActivities as $activity)
                                        <tr>
                                            <td>{{ $activity['name'] }}</td>
                                            <td>{{ $activity['email'] }}</td>
                                            <td>{{ $activity['hasil'] }}</td>
                                            <td>{{ $activity['solusi_kerusakan'] }}</td>
                                            <td>{{ $activity['created_at'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
