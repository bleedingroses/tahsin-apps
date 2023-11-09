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
                    <h4 class="card-title m-t-10 text-center">Absensi Grup {{ $grup_id->nama }}</h4>
                </div><br><br>                            
                <div class="row justify-content-center">
                        <form action="/kajian/simpan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-check form-check-inline">
                                @foreach ($grup as $santri => $grs)
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $grs->id }}">
                                    <label class="form-check-label" for="inlineCheckbox1">{{ $grs->nama }}</label>
                                @endforeach
                            </div>
                                <button type="submit" name="submit" class="btn btn-info mb-3">Tambah Kajian!</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection