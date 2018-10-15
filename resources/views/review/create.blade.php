@extends('layouts.app')
@section('content')
<h1 class="text-center">Create Blade </h1>
<div class="container">
    <h5>@yield('editName')</h5>
    <form action="/review/@yield('editId')" method="post">
        {{csrf_field()}}
        @section('editMethod')
        @show
        <div class="form-group">
            <label for="userCommenet">Write Yr Comment</label>
            {{-- <input type="text" class="form-control {{ $errors->has('userCommenet') ? ' is-invalid' : '' }}" name="userCommenet"
                value="@yield('userCommenet')"> --}}
            <textarea class="form-control {{ $errors->has('userCommenet') ? ' is-invalid' : '' }}" name="userCommenet">@yield('userCommenet')</textarea>

            @if ($errors->has('userCommenet'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('userCommenet') }}</strong>
            </span>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>


@endsection
