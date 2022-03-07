@extends('layouts.mainlayout')
@section('title', 'Index')
@section('content')
   @forelse ($posts as $key => $post)
   @if ($loop->even)
   <h1 style="color:red">{{ $key}}.) {{ $post['Blog_Title']}} </h1>
   @else 
   <h1 style="color:rgb(62, 13, 238)">{{ $key}}.) {{ $post['Blog_Title']}} </h1>
   @endif
    
    <hr>
    <h2>Date : {{ $post['Date']}} </h2>
    <h3>Subtitle : {{ $post['Subtitle']}} </h3>
    <p>Content : {{ $post['Content']}}</p>
    <br/>
   
   @empty
       <h1>No posts</h1>
   @endforelse
@endsection