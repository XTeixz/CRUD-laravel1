@extends('adminlte.master')

@section('content')
    <form action="/pertanyaan" method="POST" style="padding: 10px 15px">
        @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" id="judul">
        </div>
        <div class="form-group">
          <label for="isi">Pertanyaan</label>
          <textarea class="form-control" name="isi" rows="10" cols="30" id="isi" placeholder="Masukkan pertanyaan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection