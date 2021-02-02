@extends('layouts.master')
@section('inside-body-tag')
    <div class="container">
        <h1>Hello, {{Auth::user()-> first_name}}!</h1>
        <h1>Department:
            @switch(Auth::user()->user_type)
                @case(0)
                IT Department
                @break

                @case(1)
                Human Resources
                @break

                @case(2)
                Floor Worker
                @break

                @case(3)
                Shipping Department
                @break

                @default
                Undefined User Type
            @endswitch</h1>
    </div>
@endsection