@extends('layouts.main')
@section('container')
                  <!-- ARTICEL  -->
                  <div class="s-content">
                  <div class="masonry-wrap">

                    <div class="masonry">
        
                        <div class="grid-sizer"></div>
                        @foreach($posts as $post)
                        <article class="masonry__brick entry format-standard animate-this">
                                
                            <div class="entry__thumb">
                                <a href="/post/{{ $post->slug }}" class="entry__thumb-link">
                                    @if($post->image)
                                
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                                   
                                    @else
                                    <img src="https://source.unsplash.com/random/600x690" alt="">
                                    @endif
                                </a>
                            </div>
             
                            <div class="entry__text">
                                <div class="entry__header">
        
                                    <h2 class="entry__title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                    <div class="entry__meta">
                                        <span class="entry__meta-cat">
                                            Post By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> 
                                        </span>
                                        <span class="entry__meta-cat">
                                        In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> 
                                        </span>
                                    </div>
                                    
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        {{ $post->excerpt }}
                                    </p>
                                    <span class="entry__meta-cat">
                                     <a href="/post/{{ $post->slug }}">Read More...</a> 
                                        </span>
                                </div>
                            </div>
            
                        </article> <!-- end article -->
                        @endforeach
                    </div> <!-- end masonry -->
    
                </div> <!-- end masonry-wrap -->
                {{-- {{ $posts->links() }} --}}
                {{-- @include('partials.paginator') --}}
@endsection




