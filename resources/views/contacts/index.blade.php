@extends('layouts.master')

@section('content')

<h1>Address Book</h1>
<p class="lead">Here's a list of all your contacts. <a href="{{ route('contacts.create') }}">Add a new one?</a></p>
<hr>

@stop
