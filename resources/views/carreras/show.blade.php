@extends('layouts.app')

@section('content')

 <h1>{{ $data->name }}</h1>
<p class="lead">User</p>

<table class="table table-striped table-hover">
 <tr>
  <td>Created At</td>
  <td>{{ $data->created_at }}</td>
</tr>
<tr>
  <td>Updated At</td>
  <td>{{ $data->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('carreras.edit', $data->id) }}" class="btn btn-primary">Edit User</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['carreras.destroy', $data->id]
]) !!}
{!! Form::submit('Delete this user?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
<a href="{{ route('carreras.index') }}" class="btn btn-info">Back to all users</a>

@stop
