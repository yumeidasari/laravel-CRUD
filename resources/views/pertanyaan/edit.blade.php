@extends('adminlte.master')

@section('content')
<div class="container pt-5">
            <div class="col-md-6 offset-md-3 ">

                <h3><center>Edit Pertanyaan</center></h3>
                
                <!--untuk menampilkan pesan yg didefinisikan pada controller-->
                <center>
                @if(Session::has('pesan'))
                    <div class="alert alert-success">
                        {{ Session::get('pesan')}}
                    </div>
                @endif
                </center>

                <form action="{{url("pertanyaan/$pertanyaan->id")}}" method="POST"> <!--tidak perlu ada edit belakangnya-->

                <input type="hidden" value="PUT" name="_method">
                 {{csrf_field()}} <!--cross site request forgery fungsinya untuk proteksi web dr bug/vulnerability-->

                    

                    <label>Pertanyaan</label>
                    <input type="text" name="pertanyaan" class="form-control" value="{{$pertanyaan->pertanyaan}}">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Update" >
                    <a href="{{url('pertanyaan')}}" class="btn btn-warning">Daftar Pertanyaan</a>
                </form>

            </div>
        </div>
@endsection