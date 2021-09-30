<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Author;
use App\Tag;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tags = Tag::all();
        // dd($tags);
        
        $articles = Article::all();
        $authors= Author::all();
        $tags = Tag::all();
        return view('articles.index', compact('articles'), compact('authors'), compact('tags')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        // dd($request);
        $newArticle = new Article();
        $this->fillAndSaveArticle($newArticle, $data);
        
        Mail::to('trial@test.it')->send(new SendNewMail($newArticle));

        return redirect()->route('articles.show', $newArticle->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    private function fillAndSaveArticle(Article $article, $data){
        
        
        
        $article->title = $data['title'];
        $article->subtitle = $data['subtitle'];
        $article->picture_url = $data['picture_url'];
        $article->content = $data['content'];
        $article->author_id = $data['author_id'];

        $article->save();

        $article->tags()->sync($data['tags']);
    }
}
