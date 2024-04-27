<?php

namespace Database\Factories;

use App\Models\Topic;
use App\Models\TopicDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicDetails>
 */
class TopicDetailsFactory extends Factory
{
    protected $model = TopicDetails::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code = <<<EOD
                const price1 = 5;
                const price2 = 6;
                let total = price1 + price2;
                document.getElementById("demo").innerHTML =
                "The total is: " + total;
            EOD;

        return [
            'topic_id' => fake()->randomElement(Topic::pluck('id')),
            'short_description' => fake()->paragraphs(2, true),
            'title' => fake()->sentence(13),
            'description' => fake()->paragraphs(5, true),
            'code' => $code,
            'code_language' => 'javascript',
            'note' => fake()->sentence(20),
        ];
    }
}
