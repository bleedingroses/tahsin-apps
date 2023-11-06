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
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-success" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-10">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" aria-hidden="true">
                            Tambah Grup
                        </button><br><br>
                        <!-- .modal for add task -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Grup</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/materi/{{ $materi->id }}/belajar" class="needs-validation" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="grup_id">Nama Grup</label>
                                                <select class="form-control" name="grup_id" id="grup_id">
                                                    @foreach ($grup as $grp)
                                                        <option value="{{ $grp->id }}">{{ $grp->nama }}</option>                                                    
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label for="absensi">Absensi</label>
                                                <input type="text" name="absensi" class="form-control" id="absensi" placeholder="Absensi" value="{{ old('absensi') }}">
                                                @if ($errors->has('absensi'))
                                                    <span class="help-block">{{ $errors->first('absensi') }}</span>
                                                @endif
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="card">                          
                            <div class="right-page-header">
                                <div class="align-self-center">
                                    <h4 class="card-title m-t-10 text-center">{{ $materi->nama }}</h4><br>
                                    <div class="table-responsive justify-content-center">
                                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Grup</th>
                                                    <th>Absensi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                                @php $no = 1; @endphp
                                                @foreach ($materi->grup as $mgr)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $mgr->nama }}</td>
                                                    <td>{{ $mgr->pivot->absensi }}</td>
                                                    <td>Delete</td>
                                                </tr>
                                            </tbody>
                                                @endforeach
                                        </table><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

@endsection