<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $fake = Factory::create();
        User::create([
            'name' => 'John Doe',
            'email' => 'password',
            'password' => bcrypt('secret'),
        ]);

        foreach(range(1,10) as $i){
            User::create(
                [
                    'name' => $fake->name,
                    'email' => $fake->email,
                    'password' => bcrypt($fake->password),
                ]
                );
        }
    }
}
