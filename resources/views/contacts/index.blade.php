@extends('layouts.master')

@section('content')

<h1>Phone Directory</h1>
<p class="lead">Here's a list of all your contacts. <a href="{{ route('contacts.create') }}">Add a new one?</a></p>

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
