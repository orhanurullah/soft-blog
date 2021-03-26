<?php

namespace Database\Factories;

use App\Models\Setting;
use App\Models\Keyword;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->title,
            'logo' => $this->faker->name,
            'description' => $this->faker->text,
            'email_address' => $this->faker->unique()->safeEmail,
            'about_text' => $this->faker->text,
            'keyword_id' => Keyword::factory()
        ];
    }
}
