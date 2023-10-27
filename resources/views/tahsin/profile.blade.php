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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">                            
                            <div class="right-page-header">
                                <div class="align-self-center">
                                    <h4 class="card-title m-t-10 text-center">{{ $tahsin->nama }}</h4><br>
                                    <div class="table-responsive justify-content-center">
                                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Juz</th>
                                                    <th>Surat</th>
                                                    <th>Ayat</th>
                                                </tr>
                                            </thead>
                                                @php $no = 1; @endphp
                                                @foreach ($tahsin->hafalan as $hafalan)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $hafalan->juz }}</td>
                                                    <td>{{ $hafalan->surat }}</td>
                                                    <td>{{ $hafalan->ayat }}</td>
                                                </tr>
                                            </tbody>
                                                @endforeach
                                        </table><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
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