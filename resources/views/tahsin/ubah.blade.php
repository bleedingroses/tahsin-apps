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
                    <h4 class="card-title m-t-10 text-center">Ubah Data Santri</h4>
                </div>                            
                <div class="ml-5">

                    <form action="/tahsin/{{$tahsin->id}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                            <div class="mb-3 w-50">
                                <label for="category_id" class="form-label"><h5>Grup</h5></label>
                                <select name="category_id" id="category_id" class="form-control form-control-line">
                                        <option value="">{{ $tahsin->category->grup }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->grup }}</option>                                            
                                        @endforeach
                                </select><br>
                            </div>
                            <div class="mb-3 w-50">
                                <label for="nama" class="form-label"><h5>Nama Lengkap</h5></label>
                                <input type="text" class="form-control" name="nama" id="nama" required value="{{ $tahsin->nama }}">
                            </div><br>
                            <div class="mb-3 w-50">
                                <label for="surat" class="form-label"><h5>Nama Surat</h5></label>
                                <input type="text" class="form-control" name="surat" id="surat" required value="{{ $tahsin->surat }}">
                            </div><br>
                            <div class="mb-3 w-50">
                                <label for="ayat" class="form-label"><h5>Ayat</h5></label>
                                <input type="text" class="form-control" name="ayat" id="ayat" required value="{{ $tahsin->ayat }}">
                            </div><br>
                            <div class="mb-3 w-50">
                                <label for="gambar" class="form-label"><h5>Upload Gambar</h5></label><br><br>
                                <img src="{{ asset('img/'.$tahsin->gambar) }}" width="300" alt=""><br><br>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Ubah Data!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection