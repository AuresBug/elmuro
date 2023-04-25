<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'       => $this->faker->sentence(),
            'content'     => $this->faker->text(),
            'likes'       => $this->faker->numberBetween(0, 9000),
            'expired_at'  => $this->faker->dateTimeBetween('now', '+10 months'),
            'approved_by' => User::factory()->create(),
            'approved_at' => $this->faker->dateTimeBetween('now', '+10 months'),
            'created_by'  => User::factory()->create(),
            'created_at'  => $this->faker->dateTimeBetween('-1 months', 'now')
            ,

        ];
    }
}
