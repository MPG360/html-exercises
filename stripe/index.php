<?php

require __DIR__ . '/vendor/autoload.php';

// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
$stripe = \Stripe\Stripe::setApiKey('sk_live_A4mENoPcQUhOGONF1fheGBzz');

$cardholder = \Stripe\Issuing\Cardholder::create([
    'name' => 'Jenny Rosen',
    'email' => 'jenny.rosen@example.com',
    'phone_number' => '+18008675309',
    'status' => 'active',
    'type' => 'individual',
    'billing' => [
      'address' => [
        'line1' => '123 Main Street',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postal_code' => '94111',
        'country' => 'US',
      ],
    ],
  ]);

//$stripe->issuing->cards->create(
//  [
//    'cardholder' => 'ich_1Cm3pZIyNTgGDVfzI83rasFP',
//    'currency' => 'usd',
//    'type' => 'virtual',
//  ]
//);
