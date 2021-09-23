<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
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
        for($i=0; $i<20; $i++){

            $article = new Article();
            $article->title = $faker->words(5, true);
            $article->subtitle = $faker->sentence(1, true);
            $article->picture_url= $faker->image(null, 640,480);
            $article->content= $faker->paragraphs(3, true);

            $randAuthorKey = array_rand($authorListId, 1);
            $authorId = $authorListId[$randAuthorKey];
            $article->author_id = $authorId;

            $article->save();
        }
    }
}
