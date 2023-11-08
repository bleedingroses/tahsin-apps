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
                    <a class="link-light" href="/hafalan/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Data Surat</button></a>
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
                                        <h4 class="card-title m-t-10 text-center">Daftar Surat</h4></div>
                            </div>
                            <div class="table-responsive justify-content-center">
                                <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Aksi</th>
                                            <th>Nama Surat</th>
                                            <th>Jumlah Santri Yang Menghafal</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($hafalan as $index => $hafal)
                                        <tbody>
                                            <tr>
                                                <td>{{ $index + $hafalan->firstItem() }}</td>
                                                <td>
                                                    <a class="btn btn-outline-info btn-rounded mb-2" href="/hafalan/{{$hafal->id}}/ubah">Ubah</a>
                                                    <form action="/hafalan/{{$hafal->id}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                    </form>
                                                </td>
                                                <td><a href="/hafalan/{{ $hafal->id }}/detail">{{ $hafal->surat }}</a></td>
                                                <td>{{ $hafal->santri->count() }} Santri</td>
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