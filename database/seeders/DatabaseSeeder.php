<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Andrés Pérez';
        $user->email = 'andres@correo.com';
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(10)->create();
        Post::factory()->count(10)->create();
        //Cambio desde PC-house
    }
}
