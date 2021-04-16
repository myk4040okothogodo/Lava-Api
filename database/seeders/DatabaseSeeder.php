<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use database\factories\TaskFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Task::factory()->times(50)->create(); //we will generate 50 records
    
    
    }
}
