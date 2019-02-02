@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/cars">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Car name">
</div>
<div class="form-group">
    <input class="form-control" name="registration" type="text" placeholder="Registration">
</div>
<div class="form-group">
    <input class="form-control" name="manufacturer" type="text" placeholder="Manufacturer">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection