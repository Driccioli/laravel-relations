<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagList=[
            'politics',
            'sport',
            'gossip',
            'movies',
            'chronicles',
            'economics',
            'science',
            'gaming'
        ];

        for($i=0; $i<count($tagList); $i++){
            $newTag = new Tag();
            $newTag->tagLabel = $tagList[$i];
            $newTag->save();
        }
    }
}
