@extends('layouts.master')

@section('content')
<h2>Add a New Contact</h2>
<hr>
{!! Form::open(['url' => 'contacts']) !!}
    @include ('contacts.form', ['submitButton' => 'Add New Contact'])

{!! Form::close() !!}

@include ('errors.list')
@stop
