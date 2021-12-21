<?php
namespace App\GraphQL\Types;

use App\Models\User;

class UserTypes{
    public function jobs(User $user){
        return User::find($user->getKey())->jobs;
    }
}