@extends('adminlte.master')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2  pt-5">
                    <h3><center>Daftar Pertanyaan</center></h3>

                    <br>
                    <a href="{{url('pertanyaan/create')}}" class="btn btn-primary">Tambah</a>
                    <br>
                    <br>
                    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Pertanyaan</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($semua_pertanyaan as $pertanyaan)
                                <tr>
                                    <td>
                                        {{$pertanyaan->pertanyaan}}
                                    </td>
                                    <td>
                                        <a href="{{url("jawaban/$pertanyaan->id")}}" >Lihat Jawaban </a>|
                                        <a href="{{url("pertanyaan/$pertanyaan->id")}}" > Detail </a>|
                                        <a href="{{url("pertanyaan/$pertanyaan->id")}}" > Hapus </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$semua_pertanyaan->links()}}
                </div>

            </div>
        </div>
@endsection