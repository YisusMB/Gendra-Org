<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    
	$title = $faker->unique()->sentence(3);

    return [
        'user_id' => rand(1,30),
        'profileName' => $title,
        'slug' => str_slug($title),
        'dateOfIncorporation' => $faker->sentence(3),
        'languages' => $faker->sentence(4),
        'dateOfGraduation' =>$faker->sentence(3),
        'file' => $faker->imageUrl($width = 500, $height = 1000),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
