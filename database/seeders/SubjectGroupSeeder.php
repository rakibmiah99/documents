<?php

namespace Database\Seeders;
use App\Models\Subject;
use App\Models\SubjectGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubjectGroup::factory(Subject::count('id') * 2)->create();
    }
}
