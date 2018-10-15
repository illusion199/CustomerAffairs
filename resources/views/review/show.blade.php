@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row m-3">
        <div class="card col col-md-6 offset-md-3">
            <div class="card-body">
                <h5 class=""><span class=""><b>Id: </b></span><i class="text-secondary">{{$user->id}}</i></h5>
                <h5 class=""><span class=""><b>Name: </b></span><i class="text-secondary">{{$user->user_name}}</i></h5>

                <h5 class=""><span class=""><b>Comments: </b></span><i class="text-secondary">{{$user->userCommenet}}</i></h5>
                <a href="{{'/review/'.$user->id.'/edit'}}"><i class="far fa fa-edit"></i></a>
            </div>
        </div>
    </div>


</div>




@endsection
