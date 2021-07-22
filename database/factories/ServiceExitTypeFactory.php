<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shared\ServiceExitType;
use Faker\Generator as Faker;

$factory->define(ServiceExitType::class, function (Faker $faker) {

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
