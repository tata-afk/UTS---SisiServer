<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@inventory.test',
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        Supplier::factory(10)->create();
        Item::factory(100)->create();
    }
}
