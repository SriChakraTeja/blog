@extends('layouts.main')

@section('title','New Post')

@section('content')
<div class = "container text-center" style = "width:450px;">
    
        <form action = "{{route('posts.store')}}" method = "POST">
        @csrf
            <h1 class = "display-4">Create Post</h1>
            <div class="form-group">
                <input type="text" class="form-control" id="title" name = "title" placeholder = "Title">
              </div>    
            <div class="form-group">
                <textarea type="text" class="form-control" id = "body" name = "body" placeholder = "Text here.."></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-success btn-lg">Create</button>
        </form>
        </div>
    

@endsection