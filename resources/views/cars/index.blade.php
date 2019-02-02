@extends('layouts.app')

@section('content')

<a href="/cars/new" class="btn btn-default">Ubaci novi</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Registration</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Briši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cars as $car)
    <tr>
      <td><?= $car->name ?></td>
      <td><?= $car->registration ?></td>
      <td><?= $car->manufacturer ?></td>
      <td><a href="/cars/delete/{{ $car->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection