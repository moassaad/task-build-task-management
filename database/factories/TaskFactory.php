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
        $user = \App\Models\User::where(['email'=>'tester@mail.com'])->first();
        return [
            'title' => fake()->text(64),
            'description' => fake()->text(),
            'completion' => false,
            'user_id' => $user->id,
        ];
    }
}
