@extends('adminlte.master')

@section('content')
    <div class="container pt-5">
            <div class="col-md-6 offset-md-3 ">
            <h3><center>Buat Pertanyaan</center></h3>
                
                <!--untuk menampilkan pesan yg didefinisikan pada controller-->
                <center>
                @if(Session::has('pesan'))
                    <div class="alert alert-success">
                        {{ Session::get('pesan')}}
                    </div>
                @endif
                </center>

                <form action="{{url("/pertanyaan " ) }}" method="POST">

                 {{csrf_field()}} 

                    <label>Pertanyaan</label>
                    <input type="text" name="pertanyaan" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Simpan" >
                    <a href="{{url('pertanyaan')}}" class="btn btn-warning">Daftar Pertanyaan</a>
                </form>
            </div>
    </div>

@endsection