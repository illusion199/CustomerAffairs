@extends('layouts.app')
@section('content')
<h5 class="text-center pt-3">Create Blade </h5>
<div class="container">
    <h5>@yield('editName')</h5>
    <form action="/review/@yield('editId')" method="post">
        {{csrf_field()}}
        @section('editMethod')
        @show


        <Rate show-text allow-half v-model="valueCustomText">
            <span style="color: #f5a623">@{{ valueCustomText }}</span>
        </Rate>



        {{-- <Example-Component></Example-Component> --}}




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

<script>
    export default {
        data() {
            return {
                valueText: 3,
                valueCustomText: 3.8
            }
        },
        mounted() {
            console.log('create Component mounted.')
        }
    }

</script>
@endsection
