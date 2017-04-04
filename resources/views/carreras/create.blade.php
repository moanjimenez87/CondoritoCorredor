@extends('layouts.app')
@section('contenido')


<p class="lead">Set the information of the new user.</p>
<hr>
{!! Form::open(['route' => 'users.store']) !!}
<div class="form-group">
 {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
