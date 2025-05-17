<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\User;
use App\Models\Profile;
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
        User::factory(100)->create()
        ->each(function ($user) {
            Profile::factory(1)->create(['user_id' => $user->id])
                ->each(function ($profile) {
                    Address::factory(1)->create(['profile_id' => $profile->id]);
                    });
        });

        Category::factory()->create([
            'name' => 'action'
        ]);

        Category::factory(20)->create();

        User::factory()->create([
            'name' => 'Aries Allen',
            'email' => 'aries@allen.com',
            'password' => bcrypt('ari'),
        ]);
        Profile::factory()->create([
            'user_id' => 101,
            'job' => 'Programmer',
            'phone' => '123-456-7890',
            'website' => 'https://aries.com',
            
        ]);
        Address::factory()->create([
            'profile_id' => 101,
            'address' => '123 gdl',
            'city' => 'Guadalajara',
            'state' => 'Jalisco',
            'country' => 'Mexico',
        ]);

        // Crear 1000 posts
        Post::factory(1000)->create();
        
    }
}
