<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::truncate();
        $fake = Factory::create();

        $users = User::all();

        foreach($users as $user) {
            foreach(range(1,5) as $i){
                Jobs::create([
                    'user_id' => $user->getKey(),
                    'job_name' => $fake->sentence
                ]);
            }
        }
    }
}
