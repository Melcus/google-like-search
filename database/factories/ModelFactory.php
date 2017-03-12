<?php

use App\Models\Access\Role\Role;
use App\Models\Access\User\User;
use App\Models\City;
use Faker\Generator;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'              => $faker->name,
        'email'             => $faker->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
        'confirmation_code' => md5(uniqid(mt_rand(), true)),
    ];
});


$factory->define(App\Models\Store::class, function (Faker\Generator $faker) {
    $city_id = rand(1,48314);
    $city = City::find($city_id);
    $name = $faker->company;

   

    $data =  [
        'name'              => $name,
        'slug'              => str_slug($name),
        'description'       => $faker->sentence(10),
        'street_address'    => $faker->streetName,
        'house_number'      => ucfirst($faker->randomLetter) . ' '. $faker->buildingNumber,
        'zipcode'           => $faker->postcode,
        'website'           => $faker->domainName,
        'city_id'           => $city->id,
        'state_id'          => $city->state->id,
        'country_id'        => $city->state->country->id,
    ];

    return $data;
});


$factory->state(User::class, 'active', function () {
    return [
        'status' => 1,
    ];
});

$factory->state(User::class, 'inactive', function () {
    return [
        'status' => 0,
    ];
});

$factory->state(User::class, 'confirmed', function () {
    return [
        'confirmed' => 1,
    ];
});

$factory->state(User::class, 'unconfirmed', function () {
    return [
        'confirmed' => 0,
    ];
});

/*
 * Roles
 */
$factory->define(Role::class, function (Generator $faker) {
    return [
        'name' => $faker->name,
        'all'  => 0,
        'sort' => $faker->numberBetween(1, 100),
    ];
});

$factory->state(Role::class, 'admin', function () {
    return [
        'all' => 1,
    ];
});
