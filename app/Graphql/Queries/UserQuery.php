<?php
namespace App\graphql\Queries;

use App\Models\User;

class UserQuery{

    public function all(){
        return User::all();
    }

    public function find($root, array $args){
        return User::find($args['id']);
    }

    public function findByEmail($root, $args){
        $email = $args["email"];
        return User::query()->where('email',$email)->first();
    }

    

}