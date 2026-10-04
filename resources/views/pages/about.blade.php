@extends('layouts.app');
@section('title','about')
@section('content')
<h1>{{$skills['bio']}}</h1>
<ul>
    @foreach($skills['skills'] as $skill)
    <li>{{$skill}}</li>
    @endforeach
</ul>
@endsection