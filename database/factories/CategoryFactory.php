<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Keyword;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

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
            'description' => $this->faker->text,
            'image' => $this->faker->name,
            'keyword_id' => Keyword::factory()
        ];
    }
}
