@extends('layouts.app')

@section('content')

<a href="/clients/new" class="btn btn-default">Ubaci novi</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Adresa</th>
      <th scope="col">OIB</th>
      <th scope="col">Briši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($clients as $client)
    <tr>
      <td><?= $client->first_name ?></td>
      <td><?= $client->last_name ?></td>
      <td><?= $client->address ?></td>
      <td><?= $client->vat_id ?></td>
      <td><a href="/clients/delete/{{ $client->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection