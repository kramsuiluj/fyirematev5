<?php

namespace Database\Seeders;

use App\Models\Chief;
use App\Models\Marshal;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'rank' => 'Administrator',
            'firstname' => 'Mark Julius',
            'middlename' => 'Relos',
            'lastname' => 'Maravillo',
            'is_admin' => true,
            'password' => bcrypt('!password')
        ]);

        User::factory(5)->create();

        $defaultChief = Chief::factory()->create([
            'is_default' => true
        ]);

        Chief::factory(4)->create();

        $defaultMarshal = Marshal::factory()->create([
            'is_default' => true
        ]);

        Marshal::factory(4)->create();
    }
}
