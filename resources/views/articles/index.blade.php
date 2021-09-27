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
    <div class="container">
        <button type="button" class="btn btn-primary mb-2">
            <a class="button-link back" href="{{route('articles.create')}}">Create Article</a>
        </button>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date posted</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Author</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->subtitle}}</td>
                        <td>{{$article->author_id}}</td>
                        {{-- <td>{{$article->authors()->name}} {{$article->authors()->last_name}}</td> --}}
                        <td>{{$article->tags->pivot->tagLabel}}</td>
                        <td><img src="{{$article->picture_url}}" alt="Picture"></td>
                        <td>{{$article->content}}</td>
                        <td>
                            <button type="button" class="btn btn-primary action-button mb-2">
                                <a class="button-link" href="{{route('articles.show', $article->id)}}"><i class="bi bi-zoom-in"></i></a>
                            </button>
                            {{-- <button type="button" class="btn btn-primary action-button mb-2">
                                <a class="button-link" href="{{route('articles.edit', $article)}}"><i class="bi bi-pencil-square"></i></a>
                            </button> --}}
                            
                            
                            {{-- <!-- Button trigger modal -->
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
                                    <form action="{{route('articles.destroy', $article)}}" method="article">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">I'm sure. Delete it!</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div> --}}
  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
    

    
