@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h1>Hello {{$myname}}</h1>

                <div class="panel-body">
                    You are logged in! {{Auth::user()->email}}
                </div>
                <h3>{{$age}}</h3>

                <h4>{{$auth->name}}</h4>
            </div>
        </div>
    </div>
</div>
@endsection
