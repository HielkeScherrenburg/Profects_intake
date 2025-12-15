<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('categories')->insert([
            ['name' => 'Groente & Fruit', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vlees', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vis', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Zuivel', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Brood', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Snacks', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dranken', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
