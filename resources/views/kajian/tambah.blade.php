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
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="align-self-center">
                            <h4 class="card-title m-t-10 text-center">Tambah Jadwal Kajian</h4>
                        </div><br><br>                        
                        <div class="row justify-content-center">
                            <form action="/kajian/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <label for="todayDate" class="form-label text-center"><h5>Jadwal Kajian</h5></label>
                                    <input type="date" class="form-control datepicker" name="jadwal" id="todayDate" value="{{ old('jadwal') }}"><br>
                                    <label for="grup_id" class="form-label text-center"><h5>Grup</h5></label>
                                    <select name="grup_id" id="grup_id" class="form-control form-control-line">
                                        <option value="">Pilih Grup</option>
                                            @foreach ($grup as $grp)
                                                <option value="{{ $grp->id }}">{{ $grp->nama }}</option>                                            
                                            @endforeach
                                        </select><br>
                                    <label for="materi" class="form-label text-center"><h5>Materi</h5></label>
                                    <input type="text" class="form-control" name="materi" id="materi">
                                </div><br>
                                <div class="card">
                                    <label class="form-label text-center"><h5>Santri</h5></label>
                                    @foreach ($santri as $str)
                                        <input class="form-check-input" type="checkbox" name="absensi[]" value="{{ $str->nama }}" id="selectedGrupSantri{{ $loop->iteration }}"> 
                                        <label for="selectedGrupSantri{{ $loop->iteration }}">{{ $str->nama }}</label>
                                    @endforeach
                                </div><br>
                                <div class="form-navigation mt-3">
                                    <button type="submit" name="submit" class="btn btn-info mb-3 float-right">Tambah Data!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("todayDate").valueAsDate = new Date();
    </script>
@endsection