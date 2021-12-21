<?php
namespace App\GraphQL\Mutations;

use App\Models\User;

class UserMutation{
    public function saveUser($root, $args){
        $name = $args["name"];
        $email = $args["email"];
        $password = $args["password"];

        return User::create([
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ]);
    }
}