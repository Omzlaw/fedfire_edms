<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Humanresource\LeaveType;
use Faker\Generator as Faker;

$factory->define(LeaveType::class, function (Faker $faker) {

    return [
        'title' => $this->faker->word,
        'description' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'created_by' => $this->faker->randomDigitNotNull,
        'updated_by' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
