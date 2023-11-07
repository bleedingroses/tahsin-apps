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
                <a class="link-light" href="/grup/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Grup</button></a>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">                            
                        @if ($message = Session::get('success'))
                            <div class="alert alert-info" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                    @foreach($grup as $grp)
                        <div class="col-6">
                            <div class="card">
                                <article class="mb-5 border-bottom pb-4 text-center">
                                    <h2 class="text-center mb-4"><a href="#" class="text-decoration-none">{{ $grp->nama }}</a></h2>
                                </article>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection