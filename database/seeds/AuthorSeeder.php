<?php

use App\Author;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $author = new Author();
        $author->name = $faker->firstName();
        $author->last_name = $faker->lastName();
        $author->email = $faker->email();
        $author->about = $faker->paragraphs(1, true);

        $author->save();
    }
}
