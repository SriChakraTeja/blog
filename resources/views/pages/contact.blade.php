@extends('layouts.main')

@section('title','Contact')

@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-12">
        <h1 class = "display-4 text-center">Contact Me</h1>
        <hr>
    <form>
        <div class="form-group">
            <label name="email">Email</label>
            <input type="email" class="form-control" id="email" name = "email">
        </div>
        <div class="form-group">
            <label name="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name = "subject">
        </div>
        <div class="form-group">
            <label name="Description">Message</label>
            <textarea type="text" name = "description" class="form-control"></textarea>
        </div>
        <button type="submit" class=" btn-block btn btn-success">Submit</button>
</form>
        </div>
        </div>
    </div>
</div>
    
    
@endsection