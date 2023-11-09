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
                    <h4 class="card-title m-t-10 text-center">Tambah Jadwal Kajian</h4>
                </div><br><br>                            
                <div class="row justify-content-center">
                        <form action="/kajian/simpan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <label for="jadwal" class="form-label text-center"><h5>Jadwal Kajian</h5></label>
                                <input type="date" class="form-control datepicker" name="jadwal" id="jadwal" required>
                            </div><br>
                            <div class="card">
                                <label for="grup_id" class="form-label text-center"><h5>Grup</h5></label>
                                <select name="grup_id" id="grup_id" class="form-control form-control-line" required>
                                        <option value="">Pilih Grup</option>
                                        @foreach ($grup as $grp)
                                            <option value="{{ $grp->id }}">{{ $grp->nama }}</option>                                            
                                        @endforeach
                                </select><br>
                            </div><br>
                            <div class="card">
                                <label for="materi_id" class="form-label text-center"><h5>Judul Materi</h5></label>
                                <select name="materi_id" id="materi_id" class="form-control form-control-line" required>
                                        <option value="">Pilih Materi</option>
                                        @foreach ($materi as $mtr)
                                            <option value="{{ $mtr->id }}">{{ $mtr->nama }}</option>                                            
                                        @endforeach
                                </select><br>
                            </div><br>
                            <div class="card">
                                <label for="absensi" class="form-label text-center"><h5>Keterangan</h5></label>
                                <input type="text" class="form-control" name="absensi" id="absensi" required>
                            </div><br>
                                <button type="submit" name="submit" class="btn btn-info mb-3">Tambah Data!</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection