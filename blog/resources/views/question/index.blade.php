@extends('adminlte.master');

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($question as $key => $quest)
          <tr>
          <td>{{$key + 1}}</td>
          <td>{{$quest ->judul}}</td>
          <td>{{$quest ->isi}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection