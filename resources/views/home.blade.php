@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <br>
                    <br>
                    <ol>
                        <ul><a href="{!! url('users/') !!}">Manage users</a></ul>.
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
