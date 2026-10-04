@extends('layouts.app')

@section('title','Samiullah Popalzai')

@section('content')
<h1>welcom</h1>
<h2>{{$person['name']}}</h2>
<p>{{$person['title']}}</p>
<p>{{$person['intro']}}</p>
@endsection