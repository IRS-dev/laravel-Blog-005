@extends('layouts.main')

@section('container')

<h1 class="-mb-5"> {{ $posts->title }}</h1>
<p>By <a class="text-decoration-none" href="/author/{{$posts->author->username }}">{{ $posts->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>

{!! $posts->body !!}

<a class="text-decoration-none" href="/posts">back to blog</a>
@endsection