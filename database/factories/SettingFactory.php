<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shared\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {

    return [
        'key' => $this->faker->word,
        'value' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
    ];
});
