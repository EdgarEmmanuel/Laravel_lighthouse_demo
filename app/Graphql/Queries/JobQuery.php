<?php
namespace App\graphql\Queries;

use App\Models\Jobs;

class JobQuery{

    public function paginate($root , array $args){
        $count = $args["count"];
        $page= $args["page"];

        return Jobs::query()->paginate(
            $count,
            ["*"],
            'page',
            $page
        );

    }

}