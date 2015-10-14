@extends('layouts.master')

@section('content')
        <h4><a href="">{{ $contact->name }}</a></h4>
    <article>

        <p>{{ $contact->address}}</p>
        <p>{{ $contact->phone}}</p>
        <p>{{ $contact->email}}</p>

    </article>
@stop
