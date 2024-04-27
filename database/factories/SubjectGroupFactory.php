<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\SubjectGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubjectGroup>
 */
class SubjectGroupFactory extends Factory
{
    protected $model = SubjectGroup::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => fake()->randomElement(Subject::pluck('id')),
            'name' => fake()->name()
        ];
    }
}
