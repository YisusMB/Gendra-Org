<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    $title = $faker->unique()->sentence(4);
    return [
    	'user_id' => rand(1,30),
        'courseName'=> $title,
        'slug' => str_slug($title),
        'dayCalendar' => rand(1,31),
        'month' => $faker->word(3),
        'instructorName' => $faker->sentence(3),
        'startDate' => $faker->sentence(3),
        'courseAddress' => $faker->sentence(5),
        'excerpt' => $faker->text(200),
        'file' => $faker->imageUrl($width = 350, $height = 262),
        'description' => $faker->text(500),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
