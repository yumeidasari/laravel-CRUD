@extends('adminlte.master')

@section('content')
<div class="container pt-5">
            <div class="col-md-6 offset-md-3 ">

                <h3><center>Halaman Jawaban</center></h3>
                
                <!--untuk menampilkan pesan yg didefinisikan pada controller-->
                <center>
                @if(Session::has('pesan'))
                    <div class="alert alert-success">
                        {{ Session::get('pesan')}}
                    </div>
                @endif
                </center>

                
                    <label>Pertanyaan</label>
                    <input type="text" name="pertanyaan" class="form-control" value="{{$pertanyaan->pertanyaan}}">
                    <br>
                    
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
                                    <td>
                                        <a href="{{url("jawaban/$pertanyaan->id")}}" > Hapus </a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        @endif
                    </table>
                   
                    
                    <br>
                    <label>Jawaban Baru</label>
                <form action="{{url("/jawaban/$pertanyaan->id " ) }}" method="POST" enctype="multipart/form-data"> <!--tidak perlu ada edit belakangnya-->
               
                    {{csrf_field()}} <!--cross site request forgery fungsinya untuk proteksi web dr bug/vulnerability-->

                     <input type="text" name="jawaban" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Simpan" >
                    <a href="{{url('pertanyaan')}}" class="btn btn-warning">Daftar Pertanyaan</a>
                </form>

            </div>
        </div>
@endsection