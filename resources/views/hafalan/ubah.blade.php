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
                    <h4 class="card-title m-t-10 text-center">Ubah Surat</h4>
                </div><br><br>                            
                <div class="row justify-content-center">
                        <form action="/hafalan/{{ $hafalan->id }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="card">
                                <label for="surat" class="form-label text-center"><h5>Nama Surat</h5></label>
                                <input type="text" class="form-control" name="surat" id="surat" required value="{{ $hafalan->surat }}">
                            </div><br>
                            <button type="submit" name="submit" class="btn btn-info mb-3 ">Ubah Surat</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection