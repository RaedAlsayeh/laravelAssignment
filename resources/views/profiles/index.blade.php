@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://www.atimi.com/wp-content/uploads/2018/04/img-4-1024x683.jpg" class="w-50" class="rounded-circle">
        </div>
    </div>
    <div class="col-9">
        <div><h1>{{ $user->username}}</h1>
            <a href="/p/create">Add New Post</a>
    
    </div>
        <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}} </strong>posts</div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        @endforeach
        
    </div>
</>
@endsection
