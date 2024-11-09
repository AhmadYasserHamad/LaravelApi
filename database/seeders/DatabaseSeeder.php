<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Language;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory(300)->create();
        Language::factory(300)->create();
        Topic::factory(300)->create();
        Book::factory(300)->create();
    }
}
