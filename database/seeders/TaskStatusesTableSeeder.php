<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskStatus::create([
            'name' => 'Created',
        ]);
        TaskStatus::create([
            'name' => 'Assigned',
        ]);
        TaskStatus::create([
            'name' => 'In Progress',
        ]);
        TaskStatus::create([
            'name' => 'Done',
        ]);
    }
}
