<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\SubjectGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subject_group = SubjectGroup::pluck('id');
//        $subjects = Subject::pluck('id');
        return [
//            'subject_id' => fake()->randomElement($subjects),
            'subject_group_id' => fake()->randomElement($subject_group),
            'name' => fake()->words(9, true),
            'description' => fake()->sentence(70)
        ];
    }
}
