@extends('layouts.app')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<h1>Edit User</h1>
<p class="lead">Edit this user below.
    <a href="{{ route('carrera.index') }}">Go back to all users.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="post" action="/carreras/{{$$corredor->id}}">
    <input name="_method" type="hidden" value="PUT">

<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

    </form>

@stop
