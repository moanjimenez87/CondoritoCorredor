@extends('layouts.app')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<p class="lead">Set the information of the new user.</p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="post" action="/carreras">

<div class="form-group">
 {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
