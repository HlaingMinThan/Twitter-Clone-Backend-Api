<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'body'=>$this->faker->sentence(4),
            'created_at'=>$this->faker->dateTimeBetween('- 30days', 'now')
        ];
    }
}
