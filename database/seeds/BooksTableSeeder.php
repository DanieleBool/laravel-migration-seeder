<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){

        
        $book = new Book();

        $book->titolo = $faker->company();
        $book->casa_editrice = $faker->streetName();
        $book->autore = $faker->name();
        $book->year = $faker->date('Y');
        $book->altre_info = $faker->realText();

        $book->save();
        }
    }
}
