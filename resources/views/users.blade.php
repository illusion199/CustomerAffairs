@extends('layouts.app')
@include('layouts.header');
@section('content')
<h1>hi</h1>
@foreach($users as $user)

<li class="list-group-item">
    {{$user}}


</li>

@endforeach
@endsection
