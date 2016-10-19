<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Role::create([
            'title' => 'Administrator',
            'slug' => 'admin',
        ]);

        Role::create([
            'title' => 'User',
            'slug' => 'users',
        ]);

        Role::create([
            'title' => 'Customer',
            'slug' => 'customers',
        ]);

        User::create([
            'first_name' => 'Donald',
            'middle_name' => 'S',
            'last_name' => 'Sj',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'seen' => true,
            'role_id' => 1,
            'confirmed' => true,
        ]);

        Contact::create([
            'name' => 'Donald',
            'email' => 'admin@admin.com',
            'message' => Lipsum::short()->text(2),
        ]);

    }
}
