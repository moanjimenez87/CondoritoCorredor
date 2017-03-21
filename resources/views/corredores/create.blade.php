@extends('layouts.app')
@section('contenido')
<h1>Add a New User</h1>
<p class="lead">Set the information of the new user.</p>
<hr>
{!! Form::open(['route' => 'corredores.store']) !!}
<div class="form-group">
 {!! Form::label('nombre', 'nombre', ['class' => 'control-label']) !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('correo', 'correo', ['class' => 'control-label']) !!}
 {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
 {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
