@extends('layouts.master')

@section('content')
    <h2>Update Info For: {!! $contact->name !!}</h2>

<hr>
{!! Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactsController@update', $contact->id]]) !!}
    @include ('contacts.form', ['submitButton' => 'Update Info'])
{!! Form::close() !!}

@include ('errors.list')

@stop
