@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $posts->title }}</h1>
    <p>{{ $posts->content }}</p>
    <p>Added {{ $post->created_at->difforHumans() }}</p>

@if(now()->diffInMinutes($post->created_at) < 5)
<div class="alert alert-info">New!</div>
@endif
@endsection