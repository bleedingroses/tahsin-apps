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
                    <h4 class="card-title m-t-10 text-center">Tambah Grup</h4>
                </div>                            
                <div class="ml-5">
                        <form action="/tahsin/simpang" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 w-50">
                                <label for="grup" class="form-label"><h5>Nama Grup</h5></label>
                                <input type="text" class="form-control" name="grup" id="grup" required>
                            </div><br>
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Tambah Data!</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection