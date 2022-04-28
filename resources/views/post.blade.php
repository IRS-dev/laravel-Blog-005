
@extends('layouts.main')
@section('container')
  <!-- site content
        ================================================== -->
        <div class="s-content content">
            <main class="row content__page">
                
                <article class="column large-full entry format-standard">

                    <div class="media-wrap entry__media">
                        <div class="entry__post-thumb">
                            @if($posts->image)
                                <img src="{{ asset('storage/' . $posts->image) }}" class="card-img-top" alt="...">
                             @else
                            <img src="https://source.unsplash.com/random/600x680" class="card-img-top" alt="...">
                 @endif
                        </div>
                    </div>

                    <div class="content__page-header entry__header">
                        <h1 class="display-1 entry__title">
                        {{ $posts->title }}
                        </h1>
                        <ul class="entry__header-meta">
                            <li class="author">By <a href="/author/{{ $posts->author->username }}">{{ $posts->author->name }}</a></li>
                            
                            <li class="cat-links">
                                <a href="/categories/{{ $posts->category->slug }}">In {{ $posts->category->name}}</a>
                            </li>
                        </ul>
                    </div> <!-- end entry__header -->

                    <div class="entry__content">

                        <p class="lead drop-cap">
                        {!! $posts->body !!}
                        </p>
                    </div> <!-- end entry content -->

                </article> <!-- end column large-full entry-->



            </main>

        </div> <!-- end s-content -->
@endsection