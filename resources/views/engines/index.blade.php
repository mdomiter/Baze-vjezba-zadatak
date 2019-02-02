@extends('layouts.app')

@section('content')

<a href="/engines/new" class="btn btn-default">Ubaci novi</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">type</th>
      <th scope="col">Briši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($engines as $engine)
    <tr>
      <td><?= $engine->type ?></td>
      <td><a href="/engines/delete/{{ $engine->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach

  </tbody>
</table>

@endsection