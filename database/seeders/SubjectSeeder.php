<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = Subject::factory()->count(12)->make()->where('name', '!=', "")->unique('name');
        Subject::factory()->createMany($data->toArray());
    }
}
