@extends('layouts.mainlayout')
@section('title', 'show')
@section('content')
 
<h1>  {{ $post['Blog_Title']}} </h1>
<hr>
<h2>Date : {{ $post['Date']}} </h2>
<h3>Subtitle : {{ $post['Subtitle']}} </h3>
<p>Content : {{ $post['Content']}}</p>
 
@endsection