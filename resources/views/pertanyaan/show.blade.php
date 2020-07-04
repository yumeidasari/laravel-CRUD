@extends('adminlte.master')

@section('content')
    <div class="container pt-5">
        <div class="col-md-6 offset-md-3 ">
            <h3><center>Halaman Detail Pertanyaan</center></h3>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>Judul Pertanyaan</td>
                        <td></td>
                        
                    </tr>
                   
                    <tr>
                        <td>Pertanyaan</td>
                        <td>{{$pertanyaan->pertanyaan}}</td>
                    </tr>

                    <tr>
                        <td>Tgl Buat</td>
                        <td>{{$pertanyaan->created_at}}</td>
                        
                    </tr>
                    <tr>
                        <td>Tgl Update</td>
                        <td>{{$pertanyaan->updated_at}}</td>
                        
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Jawaban</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($semua_jawaban)==0)
                                <tr>
                                    <td>
                                        Tidak ada jawaban
                                    </td>
                                  
                                </tr>
                        @else
                            @foreach($semua_jawaban as $jawaban)
                                <tr>
                                    <td>
                                        {{$jawaban->jawaban}}
                                    </td>
                                    
                                </tr>
                            @endforeach
                        @endif
                    </table>
            <a href="{{url('pertanyaan')}}" class="btn btn-warning">Daftar Pertanyaan</a>
        </div>
    </div>
@endsection
