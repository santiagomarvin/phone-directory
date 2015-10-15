@extends('layouts.master')

@section('content')
        <h4>{{ $contact->name }}</h4>
    <article>

        <p>{{ $contact->address}}</p>
        <p>{{ $contact->phone}}</p>
        <p>{{ $contact->email}}</p>
    </article>

        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit Info</a>

@stop
