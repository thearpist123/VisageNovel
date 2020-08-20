<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'description'=>$faker->sentence,
        'assignee_id'=>factory(\App\User::class),
        'project_id'=>factory(\App\Project::class)
    ];
});
