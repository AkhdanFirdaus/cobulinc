@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <h2>Create Post</h2>
    <br>
    <form action="">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Title"> <br>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Text (optional)"></textarea>
            <br>
            <button class="btn"><i class="fa fa-times"></i> CANCEL</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> SUBMIT</button>
        </div>
    </form>
</div>
<script src="{{asset('js/ckeditor.js')}}"></script>
<script>
    var content = document.getElementById("content");
    CKEDITOR.replace(content, {
        language: 'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>