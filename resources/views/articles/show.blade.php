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
    <div class="single-post p-5">
        <button type="button" class="btn btn-primary action-button">
            <a class="button-link back" href="{{route('articles.store')}}"><-Back</a>
        </button>
        <h2>{{$article->title}}</h2>
        <h4>{{$article->subtitle}}</h4>
        
        <h6>Date posted: {{$article->created_at}}</h6>
        @if ($article->created_at != $article->updated_at)
            <h6>Date updated: {{$article->updated_at}}</h6>
        @endif
        <img src="{{$article->picture_url}}" alt="">
        <h6>Author: {{$article->author_id}}</h6>
        
        <p>{{$article->content}}</p>
        {{-- <button type="button" class="btn btn-primary action-button">
            <a class="button-link" href="{{route('articles.edit', $article)}}"><i class="bi bi-pencil-square"></i></a>
        </button>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary action-button" data-toggle="modal" data-target="#modal-{{$article->id}}">
            <i class="bi bi-trash"></i>
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modal-{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content modal-dark">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deleting article...</h5>
                </div>
                <div class="modal-body">
                Are you sure you want to delete this article?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">WAIT NO-</button>
                <form action="{{route('articles.destroy', $article)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">I'm sure. Delete it!</button>
                </form>
                </div>
            </div>
            </div>
        </div> --}}
    </div>
</body>
</html>
    
