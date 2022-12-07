<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Slot;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Slot::create([
            'id' => 1,
            'name' => 'SLOT 1'
        ]);
        Slot::create([
            'id' => 2,
            'name' => 'SLOT 2'
        ]);
        Slot::create([
            'id' => 3,
            'name' => 'SLOT 3'
        ]);
    }
}
