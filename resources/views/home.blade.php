@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Welcome {{ Auth::user()->user_role }} {{ Auth::user()->name }}</h1>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
