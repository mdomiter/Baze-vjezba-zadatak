@extends('layouts.app')

@section('content')

<a href="/rents/new" class="btn btn-default">Ubaci novi</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Datum posudbe</th>
      <th scope="col">Datum vraćanja</th>
      <th scope="col">ID klienta</th>
      <th scope="col">ID auta</th>
      <th scope="col">Briši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($rents as $rent)
    <tr>
      <td><?= $rent->rent_date ?></td>
      <td><?= $rent->return_date ?></td>
      <td><?= $rent->client_id ?></td>
      <td><?= $rent->car_id ?></td>
      <td><a href="/rents/delete/{{ $rent->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection