@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/rents">
@csrf

<div class="form-group">
    <input class="form-control" name="rent_date" type="date" placeholder="Datum iznajmljivanja">
</div>
<div class="form-group">
    <input class="form-control" name="return_date" type="date" placeholder="Datum vraćanja">
</div>

<div class="form-group">
    <select class="form-control" name="client_id">
        @foreach($clients as $client)
        <option value="{{ $client->id }}">{{ $client->first_name." ".$client->last_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="car_id">
        @foreach($cars as $car)
        <option value="{{ $car->id }}">{{ $car->name." (".$car->manufacturer.")" }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection