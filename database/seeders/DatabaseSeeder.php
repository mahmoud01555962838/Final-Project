<?php

namespace Database\Seeders;

use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->admin()->create([
            'name' => 'Admin',
            'email' => 'admin@app.com',
        ]);

        $admins = [
            'nadia',
        ];

        foreach ($admins as $name) {
            \App\Models\User::factory()->admin()->create([
                'name' => $name,
                'email' => "{$name}@app.com",
            ]);
        }

        $this->call(
            ProductTableSeeder::class
        );
    }
}
