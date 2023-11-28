@extends('layouts.main')

@section('container')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="align-self-center">
                            <h4 class="card-title m-t-10 text-center">Tambah Jadwal Kajian</h4>
                        </div><br><br> 
                        @livewire('tahsin')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("todayDate").valueAsText = new Date();
    </script>
@endsection