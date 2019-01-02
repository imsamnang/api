<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
  return [
  	'user_id' => function(){
  		return User::all()->random();
  	},  	
   	'name' => $faker->word,
   	'detail' => $faker->paragraph, 
   	'price' => $faker->numberBetween(100,1500),
   	'stock' => $faker->randomDigit,
   	'discount' => $faker->numberBetween(2,20)
  ];
});
