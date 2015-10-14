@extends('layouts.master')

@section('content')
<p class="lead">Add a New Contact</p>
<hr>
{!! Form::open([
    'route' => 'contacts.store'
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Create New Contact', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop
