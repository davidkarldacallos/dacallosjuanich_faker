<?php
require_once _DIR_ . '/../vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');

// Generate 200 employees
for ($i = 0; $i < 200; $i++) {
    $employee = [
        'id' => $i + 1,
        'lastname' => $faker->lastName,
        'firstname' => $faker->firstName,
        'office_id' => $faker->numberBetween(1, 50),
        'address' => $faker->address,
    ];
    // Insert $employee into the database
}

// Generate 50 offices
for ($i = 0; $i < 50; $i++) {
    $office = [
        'id' => $i + 1,
        'name' => $faker->company,
        'contactnum' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'postal' => $faker->postcode,
    ];
    // Insert $office into the database
}

// Generate 500 transactions
for ($i = 0; $i < 500; $i++) {
    $transaction = [
        'id' => $i + 1,
        'employee_id' => $faker->numberBetween(1, 200),
        'office_id' => $faker->numberBetween(1, 50),
        'datelog' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s'),
        'action' => $faker->randomElement(['login', 'logout']),
        'remarks' => $faker->sentence,
        'documentcode' => $faker->uuid,
    ];
    // Insert $transaction into the database
}