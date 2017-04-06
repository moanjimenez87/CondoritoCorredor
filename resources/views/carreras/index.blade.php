@extends('layouts.app')

@section('content')

<h1>Users List</h1>
<p class="lead">Here's a list of all your users.
    <a href="{!! url('carreras/create') !!}">Add a new one?</a></p>
<hr>

@foreach($list as $corredor)

<h3>{{ $corredor->name }}</h3>

<hr>

@endforeach

@stop
