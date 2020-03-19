<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'registration_number' => $faker->randomNumber(),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'barcode' => $faker->unique()->randomNumber(),
        'price' => $faker->randomNumber(2),
        'amount' => $faker->randomNumber(),
    ];
});

$factory->define(App\PurchaseOrder::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'client_id' => App\Client::all()->random()->id,
        'status' => $faker->randomElement(['A', 'P', 'C']),
    ];
});

$factory->define(App\PurchaseOrderItens::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(),
        'product_id' => App\Product::all()->random()->id,
        'amount' => $faker->randomNumber(3),
        'purchase_order_id' => App\PurchaseOrder::all()->random()->id,
    ];
});
