@extends('layouts.app')

@section('title','Blog Posts')

@section('content')
{{-- @each('posts.partials.post', $post, 'post') --}}
@forelse ($post as $key =>$post)
    @include('posts.partials.post', [])
@empty
no post found
@endforelse
@endsection

