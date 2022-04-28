@extends('layouts.main')
@section('container')
<h1 class="mb-5">{{ $title }}</h1>
@foreach($posts as $post)
<article class="mb-3 pb-4 border-bottom">
    <h2><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <p>{{ $post->excerpt }}</p>
    <p>By. <a class="text-decoration-none" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in
        <a class="text-decoration-none" href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
    </p>
    <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read more...</a>
</article>
@endforeach

@endsection