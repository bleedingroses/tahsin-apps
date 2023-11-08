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
                <a class="link-light" href="/grup/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Grup</button></a>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">
                <div class="col-8">
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
                                        <th>Aksi</th>
                                        <th>Nama Grup</th>
                                        <th>Jumlah Anggota</th>
                                    </tr>
                                </thead>
                                @foreach($grup as $index => $grp)
                                    <tbody>
                                        <tr>
                                            <td>{{ $index + $grup->firstItem() }}</td>
                                            <td>
                                                <a class="btn btn-outline-info btn-rounded mb-2" href="/grup/{{$grp->id}}/ubah">Ubah</a>
                                                    <form action="/grup/{{$grp->id}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                    </form>
                                            </td>
                                            <td>{{ $grp->nama }}</td>
                                            <td>{{ $grp->santri->count() }} Santri</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Wrapper -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
@endsection