@extends('layouts.dashboardmain')
@section('containerfluid')
 <!-- Container fluid -->
 <div class="container-fluid">
     <div class="row">
         <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">My Posts</h5>
                </div>
                @if(session()->has('success'))
                <div class="alert alert-success col-6 lg-6" role="alert">{{ session('success') }}</div>
                @endif
                <div class="col-6 lg-6">
                    <a  class="mb-5 btn-success btn-rounded" href="/dashboard/posts/create">Create New Post</a>
                </div>
                    <table class="table mt-3">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Title</th>
                          <th scope="col">Category</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($posts as $post)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a href="/dashboard/posts/{{ $post->slug }}" class="badge btn-info">Detail</a>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn-warning">Edit</a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge btn-danger border-0" onclick="return confirm('Are you sure delete this post?')">Delete</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                </table>
            </div>
         </div>
     </div>
</div>
@endsection
