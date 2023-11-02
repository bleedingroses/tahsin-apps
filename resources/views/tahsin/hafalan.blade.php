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
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">                            
                            <div class="right-page-header">
                                    <div class="align-self-center">
                                        <h4 class="card-title m-t-10 text-center">Daftar Surat</h4></div>
                            </div>
                            <div class="table-responsive justify-content-center">
                                <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Surat</th>
                                            <th>Jumlah Santri Yang Menghafal</th>
                                            <th>Pengajar</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($hafalan as $index => $hafal)
                                        <tbody>
                                            <tr>
                                                <td>{{ $index + $hafalan->firstItem() }}</td>
                                                <td>{{ $hafal->surat }}</td>
                                                <td>{{ $hafal->tahsin->count() }} Santri</td>
                                                <td>Ustadz Ahmad Fauzi</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">{{ $hafalan->links('vendor.pagination.simple-tailwind') }}</div>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
@endsection