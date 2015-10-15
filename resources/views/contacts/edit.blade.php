@extends('layouts.master')

@section('content')
    <h2>{!! $contact->name !!}</h2>

<hr>
{!! Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactsController@update', $contact->id]]) !!}
    @include ('contacts.form', ['submitButton' => 'Update Info'])
{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['ContactsController@destroy', $contact->id]]) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@include ('errors.list')

@stop
