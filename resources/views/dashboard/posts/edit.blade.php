@extends('layouts.dashboardmain')
@section('containerfluid')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Edit Post</h5>
                </div>
                <div class="card">
                    <form class="form-horizontal" method="post" action="/dashboard/posts/{{ $post->slug }}">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            {{-- Title --}}
                            <div class="form-group row">
                                <label for="title"
                                    class="col-sm-3 text-right control-label col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input required value="{{ old('title',$post->title) }}" name="title" autofocus type="text"
                                        class="form-control  @error('title') is-invalid @enderror" id="title"
                                        placeholder="Title Here">
                                    @error('title')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- slug --}}
                            <div class="form-group row">
                                <label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input name="slug" required type="text" class="form-control " id="slug" value="{{ old('slug'),$post->slug }}"
                                        placeholder="Slug" >
                                    @error('slug')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- category --}}
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select name="category_id" class="select2 form-control custom-select"
                                        style="width: 100%; height:36px;">
                                        @foreach($categories as $category)
                                        @if(old('category_id',$post->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                             {{-- FILE input --}}
                             {{-- <div class="form-group row">
                                <label class="col-sm-3 text-right control-label form-label" for="formFile">Post Image</label>
                                <div class="mb-2 col-sm-9">
                                    <input type="hidden" name='oldImage' value="{{ $post->image }}">
                                    <input class="form-control " type="file" id="formFile" name="image" onchange="previewImage()">
                                    @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid d-block col-sm-5">
                                    @endif
                                    <img class="img-preview img-fluid">
                                    @error('image')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- Body Post --}}
                            <div class="form-group row">
                                <label for="body"
                                    class="col-sm-3 text-right control-label col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <input id="body" type="hidden" name="body" required value="{{ old('body',$post->body) }}">
                                    <trix-editor input="body"></trix-editor>
                                    @error('body')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- button --}}
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');
title.addEventListener('change', function() {
    fetch('/dashboard/posts/create/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
});

document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
})

function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview')

imgPreview.style.display = 'block';
const oFReader = new FileReader();
oFReader.readAsDataURL(image.files[0]);
oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
    
}
}
</script>

@endsection