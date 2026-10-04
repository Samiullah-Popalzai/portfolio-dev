@extends('layouts.app');
@section('title','projects');
@section('content')

@foreach ($projects as $project)

<h1>{{ $project['title']}}</h1>
<p>{{ $project['description']}}</p>
<a href="{{ $project['link']}}">{{ $project['link']}}</a>

@endforeach
@endsection