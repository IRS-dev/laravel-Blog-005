@extends('layouts.dashboardmain')
@section('containerfluid')
 <div class="container-fluid">
     <div class="row">
         <div class="col-lg-6">
             <div class="card">
                 @if($post->image)
                 <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                     @else
                     <img src="https://source.unsplash.com/random/600x680" class="card-img-top" alt="...">
                 @endif
                
                 <div class="card-body">
                     <div class="my-3">
                    <a href="/dashboard/posts/" class="badge btn-default">Back to All Post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn-warning">Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge btn-danger border-0" onclick="return confirm('Are you sure delete this post?')">Delete</button>
                        </form>
                    </div>
                    <h1 class="card-title m-b-0 mb-3">{{ $post->title }}</h1>
                    <ul>
                        <li class="link-primary mb-2">By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
                        
                        
                            <a class="link-success" href="/categories/{{ $post->category->slug }}">In {{ $post->category->name}}</a>
                        </li>
                    </ul>
                    <p>{!! $post->body !!} </p>
                </div>
             </div>
         </div>
     </div>
 </div>
@endsection
