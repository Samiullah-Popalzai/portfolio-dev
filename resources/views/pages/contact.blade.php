@extends('layouts.app');
@section('title','contact');
@section('content')
<a href="{{ $contact['email']}}">Email</a>
<a href="{{ $contact['github']}}">Github</a>
<a href="{{ $contact['linkedin']}}">Linkedin</a>
@endsection