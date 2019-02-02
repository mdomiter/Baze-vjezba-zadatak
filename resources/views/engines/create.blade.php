@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/engines">
@csrf

<div class="form-group">
    <input class="form-control" name="type" type="text" placeholder="Tip motora">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection