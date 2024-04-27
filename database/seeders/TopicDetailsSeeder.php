<?php

namespace Database\Seeders;

use App\Models\TopicDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicDetails::factory(1200)->create();
    }
}
