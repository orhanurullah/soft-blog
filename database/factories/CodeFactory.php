<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Code;
use App\Models\Keyword;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Code::class;

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
            'name' => $this->faker->title,
            'title' => $title,
            'slug' => $slug,
            'defination' => $this->faker->text,
            'excerpt' => $this->faker->text,
            'content' => $this->faker->paragraph,
            'keyword_id' => Keyword::factory(),
            'category_id' => Category::all()->random()->id
        ];
    }
}
