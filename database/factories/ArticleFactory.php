<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slag = Str::slug($title, '-');
        return [
            'title' => $title,
            'slug'=>$slag,
            'body'=>$this->faker->paragraph(100, true),
            'img'=>'https://via.placeholder.com/600/dddddd/ffffff/?text=Laravel:9',
            'created_at'=>$this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
