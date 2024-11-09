<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Language;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand_language = Language::all()->random()->id;
        $rand_author = Author::all()->random()->id;
        $rand_topic = Topic::all()->random()->id;
        return [
            'title' => fake()->text(),
            'language_id' => $rand_language,
            'author_id' => $rand_author,
            'topic_id' => $rand_topic
        ];
    }
}
