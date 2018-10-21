@extends('layouts.app')
@section('content')
<h5 class="text-center pt-3">Review Blade</h5>
<div class="container">
    <div class="row">
        <ul class="list-group col col-md-8">
            @foreach($reviews as $review)
            <li class="list-group-item bg">
                <a class="text-info" href="{{'/review/'.$review->id}}">{{$review->user_name}}</a>
                <span class="float-right">{{$review->created_at->diffforHumans()}}</span>

            </li>

            @endforeach
        </ul>
        <ul class="list-group col col-md-4">
            @foreach($reviews as $review)

            <li class="list-group-item">
                <a href="{{'/review/'.$review->id.'/edit'}}"><i class="far fa fa-edit"></i></a>
                <form class="float-right" action="{{'/review/'.$review->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" style="border: none;padding: 0;background-color: snow;"><i class="fas fa fa-trash text-success"></i></button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection
