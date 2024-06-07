<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'nama'=>'Tugas MTK',
            'deadline'=>'2024-08-05',
            'status'=>'belum dikerjakan',
            'description'=>'ini Tugas MTK'
        ]);
        Task::factory(5)->create();
    }
}
