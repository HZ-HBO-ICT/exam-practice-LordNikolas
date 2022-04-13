<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class FooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'thud'=>$this->faker->numberBetween(0,50),
            'wombat'=>$this->faker->boolean(),
            'amogus'=>Post::all()->random()->id
        ];
    }
}
