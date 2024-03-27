<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->state([
                'email' => 'administrador@gmail.com'
            ])
            ->administrador()
            ->create();

        User::factory()
            ->state([
                'email' => 'cliente@gmail.com'
            ])
            ->cliente()
            ->create();

        User::factory()
            ->state([
                'email' => 'usuario@gmail.com'
            ])
            ->usuario()
            ->create();
    }
}