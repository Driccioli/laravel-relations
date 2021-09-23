@extends('layouts.app')

@section('content')
    <form class="p-5 single-post" action="{{route('articles.store')}}" method="post">

        @csrf
        <button type="button" class="btn btn-primary action-button">
            <a class="button-link back" href="{{route('articles.store')}}"><-Back</a>
        </button>

        <div class="form-group mt-2">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="subtitle">subtitle</label>
            <input class="form-control" type="text" name="subtitle" id="subtitle">
        </div>

        <div class="form-group">
            <label for="picture_url">Picture(must be an URL)</label>
            <input class="form-control" type="text" name="picture_url" id="picture_url">
        </div>
        
        <div class="form-group">
            <label for="content">Article Content</label>
            <textarea class="form-control" name="content" id="content" rows="4">
            
            </textarea>
        </div>

        <div class="form-group">
            <label for="author_id">Author</label>
            <input class="form-control" type="text" name="author_id" id="author_id">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>    
@endsection