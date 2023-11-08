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
                    <div class="col-8">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" aria-hidden="true">
                            Tambah Hafiz
                        </button><br><br>
                        <!-- .modal for add task -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Hafiz</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/hafalan/{{ $hafalan->id }}/hafiz" class="needs-validation" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nama">Nama Hafiz</label>
                                                <select class="form-control" name="nama" id="nama" required>
                                                    @foreach ($santri as $str)
                                                        <option value="">Pilih Hafiz</option>
                                                        <option value="{{ $str->id }}">{{ $str->nama }}</option>                                                    
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label for="ayat">Ayat</label>
                                                <input type="text" name="ayat" class="form-control" id="ayat" placeholder="Ayat" value="{{ old('ayat') }}">
                                                @if ($errors->has('ayat'))
                                                    <span class="help-block">{{ $errors->first('ayat') }}</span>
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
                                    <h4 class="card-title m-t-10 text-center">{{ $hafalan->surat }}</h4><br>
                                    <div class="table-responsive justify-content-center">
                                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Aksi</th>
                                                    <th>Ayat</th>
                                                    <th>Nama Hafiz</th>

                                                </tr>
                                            </thead>
                                                @php $no = 1; @endphp
                                                @foreach ($hafalan->santri as $santri)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td><a href="/hafalan/{{ $hafalan->id }}/{{ $santri->id }}/hapus" class="btn btn-outline-info btn-sm"
                                                        onclick="return confirm('Apakah kamu yakin?')">Hapus</a></td>
                                                    <td>Ayat {{ $santri->pivot->ayat }}</td>
                                                    <td>{{ $santri->nama }}</td>
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