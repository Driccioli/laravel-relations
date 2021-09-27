<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
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
            <label for="subtitle">Subtitle</label>
            <input class="form-control" type="text" name="subtitle" id="subtitle">
        </div>

        <div class="form-group">
            <label for="picture_url">Picture(must be an URL)</label>
            <input class="form-control" type="text" name="picture_url" id="picture_url">
        </div>
        
        <div class="form-group">
            <label for="content">Article Content</label>
            <textarea class="form-control" name="content" id="content" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="author_id">Author</label>
            <input class="form-control" type="text" name="author_id" id="author_id">
        </div>

        <div class="form-group">
            
            @foreach ($tags as $tag)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="{{$tag->tagLabel}}">
                <label class="form-check-label" for="{{$tag->tagLabel}}">
                {{$tag->tagLabel}}
                </label>
            </div>
            @endforeach
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form> 
</body>
</html>
    