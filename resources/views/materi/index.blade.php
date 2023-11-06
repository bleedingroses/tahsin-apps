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
                    <a class="link-light" href="/materi/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Materi</button></a>
                </div>   
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
                                                <h4 class="card-title m-t-10 text-center">Daftar Materi</h4></div>
                                    </div>
                                    <div class="table-responsive justify-content-center">
                                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Aksi</th>
                                                    <th>Judul Materi</th>
                                                </tr>
                                            </thead>
                                            @foreach($materi as $index => $mtr)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $index + $materi->firstItem() }}</td>
                                                        <td>
                                                                <a class="btn btn-outline-info btn-rounded mb-2" href="/materi/{{$mtr->id}}/ubah">Ubah</a>
                                                                <form action="/materi/{{$mtr->id}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                                </form>
                                                        </td>
                                                        <td><a href="/materi/{{ $mtr->id }}/detail">{{ $mtr->nama }}</a></td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                        </div>
                        <div class="d-flex justify-content-center">{{ $materi->links('vendor.pagination.simple-tailwind') }}</div>
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