@extends('layouts.main')

@section('container')
    

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid r-aside">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Stats box -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>What To Do</h4>
                                        <h6 class="card-subtitle">List of your next task to complete</h6></div>
                                    <div class="ml-auto">
                                        <button class="pull-right btn btn-sm btn-rounded btn-success" data-toggle="modal" data-target="#myModal">Tambah</button>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget m-t-20">
                                    <!-- .modal for add task -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Tugas</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name">Nama Tugas</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Agenda">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                        @php $no = 1; @endphp
                                        @foreach ($posts as $post)
                                            <li class="list-group-item" data-role="task">{{ $no++ }}. {{ $post->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right panel -->
                <!-- ============================================================== -->
                <aside class="right-side-panel">

                        <!-- Weather Widget -->
                        <div class="col-md-12 m-t-10">
                            <div id="id32de98427d17e" a='{"t":"a","v":"1.2","lang":"id","locs":[1682],"ssot":"c","sics":"ds","cbkg":"#FFFFFF","cfnt":"#000000","cprb":"#1976D2","cprf":"#FFFFFF","ewc":"bool","slbr":9,"slfs":17,"slmw":200}'>Sumber Data Cuaca: <a href="https://cuacalab.id/cuaca_malang/10_hari/">prakiraan cuaca Malang 10 hari kedepan</a></div><script async src="https://static1.cuacalab.id/widgetjs/?id=id32de98427d17e"></script>
                        </div>
                        <!-- End Weather Widget -->

                </aside>
                <!-- ============================================================== -->
                <!-- End Right panel -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
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