@extends('layouts.app')
@section('content')
<h1 class="text-center">Create Blade</h1>

<form method="POST" action="/review">
    @csrf

    <div class="container">
        <h5>{{ Auth::user()->name }}</h5>
        <div class="form-group">
            <label for="userCommenet">Write Yr Comment</label>
            <textarea class="form-control" name="userCommenet"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>

@endsection
