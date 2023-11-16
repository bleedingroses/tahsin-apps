@extends('layouts.main')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .form-section{
            display: none;
        }
        .form-section.current{
            display: inline;
        }
        .parsley-errors-list{
            color: red;
        }
    </style>

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
                <div class="nav nav-fill my-3 justify-content-center">
                    <label for="nav-link shadow-sm step0 border ml-2">Tahap 1</label>
                    <label for="nav-link shadow-sm step0 border ml-2">Tahap 2</label>
                </div>                            
                <div class="row justify-content-center">
                    <form action="/kajian/simpan" method="post" enctype="multipart/form-data" class="kajian-form">
                        @csrf
                        <div class="card form-section">
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
                        <div class="card form-section">
                            <label class="form-label text-center"><h5>Santri</h5></label>
                            @foreach ($santri as $str)
                                <input class="form-check-input" type="checkbox" name="absensi[]" value="{{ $str->nama }}" id="selectedGrupSantri{{ $loop->iteration }}"> 
                                <label for="selectedGrupSantri{{ $loop->iteration }}">{{ $str->nama }}</label>
                            @endforeach
                        </div><br>
                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-outline-info float-left mr-2">Kembali</button>
                            <button type="button" class="next btn btn-outline-info float-right ml-2">Lanjut</button>
                            <button type="submit" name="submit" class="btn btn-info mb-3 float-right">Tambah Data!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            var $sections=$('.form-section');

            function navigateTo(tambah){
                $sections.removeClass('current').eq(tambah).addClass('current');
                $('.form-navigation .previous').toggle(tambah>0);
                var atTheEnd = tambah >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);

                const step= document.querySelector('.step'+tambah);
                step.style.backgroundColor="#17a2b8";
                step.style.color="white";
            }
            function curIndex(){
                return $sections.tambah($sections.filter('.current'));
            }
            $('.form-navigation .previous').click(function(){
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function(){
                $('.kajian-form').parsley().whenValidate({
                    group: 'block-'+curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function(tambah,section){
                $($section).find(':input').attr('data-parsley-group', 'block-'+tambah);
            });
            navigateTo(0);
        })
    </script>
@endsection