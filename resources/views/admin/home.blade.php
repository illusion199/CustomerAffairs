@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="pt-3">
                <div class="card">
                    <div class="card-header text-center text-info"><strong>Admin Home</strong></div>


                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
