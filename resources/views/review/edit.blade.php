@extends('review.create')
@section('editId', $review->id)
{{-- @php
pr($review->id);
@endphp --}}
@section('editedName', $review->user_name)
@section('userCommenet', $review->userCommenet)
@section('editMethod')
{{method_field('PUT')}}
@endsection
