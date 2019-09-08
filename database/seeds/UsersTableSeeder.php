<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                // Création du compte admin pour les tests
                'name' => "admin",
                'email' => 'admin@admin.com',
                'password' => bcrypt('adminadmin')
            ]
        ]);

    }
}
