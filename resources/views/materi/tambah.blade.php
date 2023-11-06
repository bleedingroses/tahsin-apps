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
                    <h4 class="card-title m-t-10 text-center">Tambah Materi</h4>
                </div><br><br>                            
                <div class="row justify-content-center">
                        <form action="/materi/simpan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <label for="nama" class="form-label text-center"><h5>Judul Materi</h5></label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div><br>
                            <button type="submit" name="submit" class="btn btn-info mb-3 ">Tambah Materi</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection