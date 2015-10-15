@extends('layouts.master')

@section('content')

<h1>Phone Directory</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
<hr>

<a href="{{ route('contacts.index') }}" class="btn btn-info">View Contacts</a>
<a href="{{ route('contacts.create') }}" class="btn btn-primary">Add New Contact</a>

@stop
