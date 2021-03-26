<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Keyword;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->text,
            'content' => $this->faker->paragraph,
            'keyword_id' => Keyword::factory(),
            'category_id' => Category::all()->random()->id
        ];
    }
}
