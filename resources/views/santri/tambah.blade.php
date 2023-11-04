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
            <div class="card">
                <div class="align-self-center">
                    <h4 class="card-title m-t-10 text-center">Tambah Data Santri</h4>
                </div><br><br>                            
                <div class="row justify-content-center">
                        <form action="/santri/simpan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <label for="grup_id" class="form-label text-center"><h5>Grup</h5></label>
                                <select name="grup_id" id="grup_id" class="form-control form-control-line">
                                        <option value="">Pilih Grup</option>
                                        @foreach ($grup as $grp)
                                            <option value="{{ $grp->id }}" required>{{ $grp->nama }}</option>                                            
                                        @endforeach
                                </select><br>
                            </div><br>
                            <div class="card">
                                <label for="nama" class="form-label text-center"><h5>Nama Lengkap</h5></label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div><br>
                                <button type="submit" name="submit" class="btn btn-info mb-3">Tambah Data!</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection