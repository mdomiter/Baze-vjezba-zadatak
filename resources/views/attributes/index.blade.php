@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime atributa</th>
      <th scope="col">Dopušten?</th>
      <th scope="col">Tip atributa</th>
      <th scope="col">Briši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($attributes as $attribute)
    <tr>
      <td><?= $attribute->id ?></td>
      <td><?= $attribute->attribute_name ?></td>
      <td><?= $attribute->is_allowed ?></td>
      <td><?= $attribute->attribute_type ?></td>
      <td><a href="/attributes/delete/{{ $attribute->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

<a href="/attributes/new" class="btn btn-success">Ubaci novi</a>
@endsection