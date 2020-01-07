@extends('layouts.main')

@section('title','| HomePage')

@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to my blog!</h1>
                <p class="lead">Thank you so much for visiting my blog. This is build using laravel.</p>
                <hr class="my-4">
                <p>Please read my latest post</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </div>
        </div>
    </div>  <!-----End of Row --->
    
    <div class = "row">
        <div class="col-md-8">
            <div class = "post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quas ipsam a et eaque doloribus consequatur placeat provident non. Expedita sunt quae illo vel necessitatibus ipsam voluptates vitae hic? Cupiditate!</p>
                <a href="#" class = "btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class = "post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quas ipsam a et eaque doloribus consequatur placeat provident non. Expedita sunt quae illo vel necessitatibus ipsam voluptates vitae hic? Cupiditate!</p>
                <a href="#" class = "btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class = "post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quas ipsam a et eaque doloribus consequatur placeat provident non. Expedita sunt quae illo vel necessitatibus ipsam voluptates vitae hic? Cupiditate!</p>
                <a href="#" class = "btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class = "post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quas ipsam a et eaque doloribus consequatur placeat provident non. Expedita sunt quae illo vel necessitatibus ipsam voluptates vitae hic? Cupiditate!</p>
                <a href="#" class = "btn btn-primary">Read More</a>
            </div>
            <hr>
        </div>
        <div class = "col-md-3 col-md-offset-1" style = "color:red;">
            <h1>Side Bar</h1>
        </div>
    </div>
</div>
@endsection    
