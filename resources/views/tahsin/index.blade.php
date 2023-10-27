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
                    <a class="link-light" href="/tahsin/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Data Santri</button></a>
                    <a class="link-info" href="/tahsin/tambahg"><button type="button" class="btn btn-rounded btn-outline-info">Tambah Grup</button></a>
                </div>
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">                            
                                    <div class="right-page-header">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10 text-center">Daftar Santri</h4></div>
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
                                                    <th>Gambar</th>
                                                    <th>Nama</th>
                                                    <th>Grup</th>
                                                    <th>Jadwal</th>
                                                    <th>Pengajar</th>
                                                </tr>
                                            </thead>
                                            @foreach($tahsins as $index => $tahsin)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $index + $tahsins->firstItem() }}</td>
                                                        <td>
                                                            <div role="group" aria-label="Vertical radio toggle button group">
                                                                <a class="btn btn-outline-info btn-rounded mb-2" href="/tahsin/{{$tahsin->id}}/ubah">Ubah</a>
                                                                <form action="/tahsin/{{$tahsin->id}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td><img src="{{ asset('img/'.$tahsin->gambar) }}" width="100" alt=""></td>
                                                        <td>{{$tahsin['nama']}}</td>
                                                        <td>{{ $tahsin->category->grup }}</td>
                                                        <td>{{$tahsin['jadwal']}}</td>
                                                        <td>Ustadz Fauzi Ahmad</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                        </div>
                        <div class="d-flex justify-content-center">{{ $tahsins->links('vendor.pagination.simple-tailwind') }}</div>
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