@extends('layouts.main')

@section('container')
    <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles justify-content-around">
                    <a class="link-light" href="/tahsin/tambahg"><button type="button" class="btn btn-info btn-rounded">Tambah Grup</button></a>
                </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">                            
                                    <div class="right-page-header">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10 text-center">Daftar Grup</h4></div>
                                    </div>
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-info" role="alert">
                                        {{ $message }}
                                    </div>
                                @endif
                                    <div class="table-responsive justify-content-center">
                                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Grup</th>
                                                    <th>Pengajar</th>
                                                </tr>
                                            </thead>
                                            @php $no = 1; @endphp
                                            @foreach($categories as $category)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $category->grup }}</td>
                                                    <td>Ustadz Ahmad Fauzi</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

@endsection