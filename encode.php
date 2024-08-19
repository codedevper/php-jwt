<?php
require_once './vendor/firebase/php-jwt/src/JWT.php';

use \Firebase\JWT\JWT;

$key = "your_secret_key";
$payload = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => time(),
    "exp" => time() + 3600, // Token expires in 1 hour
    "data" => array(
        "userId" => 123,
        "username" => "exampleUser"
    )
);

$jwt = JWT::encode($payload, $key, 'HS256');
echo "JWT: " . $jwt;
