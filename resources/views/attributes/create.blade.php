@extends('layouts.app')

@section('content')

<form method="post" action="/attributes">
@csrf

<div class="form-group">
    <input class="form-control" name="attribute_name" type="text" placeholder="Upiši ime atributa">
</div>
<div class="form-group">
    <input class="form-control" name="is_allowed" type="text" placeholder="Upiši da li je dopušteno (Da/Ne)">
</div>
<div class="form-group">
    <input class="form-control" name="attribute_type" type="text" placeholder="Upiši tip atributa">
</div>

<button type="submit" class="btn btn-success">Pošalji</button>
</form>

@endsection