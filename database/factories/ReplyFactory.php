<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => function () {
            return User::all()->random();
        },
        'question_id' => function () {
            return Question::all()->random();
        }
    ];
});
