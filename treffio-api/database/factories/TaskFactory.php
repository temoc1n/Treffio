<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->unique()->randomElement(['Walk the dog', 'Wash the dishes', 'Clean the room']);
        $description = $this->faker->text();
        $deadline = $this->faker->dateTime();
        $done = $this->faker->randomElement([0,1]);


        return [
            'name' => $name,
            'description' => $description,
            'deadline' => $deadline,
            'done' => $done
        ];
    }
}
