<?php

namespace Database\Factories;

use App\Models\Post; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Post::class;

    public function definition(): array
    {
        return [
            //
             'id' => $this->faker->sentence(),
              'name' => $this->faker->sentence(),  
               'DOB' => $this->faker->sentence(),        

        ];
    }
}
