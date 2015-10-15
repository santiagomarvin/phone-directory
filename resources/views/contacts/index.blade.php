@extends('layouts.master')

@section('content')

<p class="lead"><a href="{{ route('contacts.create') }}">Add New Contact</a></p>

@foreach ($contacts as $contact)
    <article>
        <h4><a href="{{ url('/contacts', $contact->id ) }}">{{ $contact->name }}</a></h4>
        <div class="body">
        <p>{{ $contact->address}}</p>
        <p>{{ $contact->phone}}</p>
        <p>{{ $contact->email}}</p>
        </div>
    </article>
@endforeach
@stop
