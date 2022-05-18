<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        Rol::factory()->create([
            'name' => 'student',
        ]);
        Rol::factory()->create([
            'name' => 'master',
        ]);
        $rol = Rol::factory()->create([
            'name' => 'principal',
        ]);

        $user = User::factory()->create([
            'name' => 'Admin',
            'lastName' => '',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345'),
        ]);

        $user->rol()->attach($rol);
    }
}
