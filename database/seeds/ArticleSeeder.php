<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
use App\Tag;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $idAuthorsList=[];
        for($i=0; $i<20;$i++){
            $author = new Author();
            $author->name = $faker->firstName();
            $author->last_name = $faker->lastName();
            $author->email = $faker->email();
            $author->about = $faker->paragraphs(1, true);
    
            $author->save();
            $authorListId[]=$author->id;
            
        }

        $idTagsList=[];
        $tags = Tag::all();
        foreach($tags as $tag){
            $tagListId[]=$tag->id;
        }

        for($i=0; $i<20; $i++){

            $article = new Article();
            $article->title = $faker->words(5, true);
            $article->subtitle = $faker->sentence(1, true);
            $article->picture_url= $faker->imageUrl(300, 200, 'landscapes', true);
            $article->content= $faker->paragraphs(3, true);

            $randAuthorKey = array_rand($authorListId, 1);
            $authorId = $authorListId[$randAuthorKey];
            $article->author_id = $authorId;

            $randTagKey = array_rand($tagListId, 1);
            $tagId = $tagListId[$randTagKey];
            $article->tag_id = $tagId;


            $article->save();
        }
    }
}
