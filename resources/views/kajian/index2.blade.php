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
                    <a class="link-light" href="/kajian/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Jadwal Kajian</button></a>
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
                                                <h4 class="card-title m-t-10 text-center">Jadwal Kajian</h4></div>
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
                                                    <th>Aksi</th>
                                                    <th>Jadwal</th>
                                                    <th>Grup</th>
                                                    <th>Materi</th>
                                                </tr>
                                            </thead>
                                            @foreach($kajian as $index => $kjn)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $index + $kajian->firstItem() }}</td>
                                                        <td>
                                                                <a class="btn btn-outline-info btn-rounded mb-2" href="/kajian/{{$kjn->id}}/ubah">Ubah</a>
                                                                <form action="/kajian/{{$kjn->id}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                                </form>
                                                        </td>
                                                        <td>{{ $kjn->jadwal }}</td>
                                                        <td>{{ $kjn->grup->nama }}</td>
                                                        <td>{{ $kjn->materi->nama }}</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                        </div>
                        <div class="d-flex justify-content-center">{{ $kajian->links('vendor.pagination.simple-tailwind') }}</div>
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