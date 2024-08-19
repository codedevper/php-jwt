<?php
require_once './vendor/firebase/php-jwt/src/JWT.php';
require_once './vendor/firebase/php-jwt/src/Key.php';

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = "your_secret_key";
$jwt = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vZXhhbXBsZS5vcmciLCJhdWQiOiJodHRwOi8vZXhhbXBsZS5jb20iLCJpYXQiOjE3MjIzNzcxNzAsImV4cCI6MTcyMjM4MDc3MCwiZGF0YSI6eyJ1c2VySWQiOjEyMywidXNlcm5hbWUiOiJleGFtcGxlVXNlciJ9fQ.yD3SDG2_o8qmDO388kYK2ul84sMKOu1yqBFGSmMHofE"; // Assuming the JWT is passed as a query parameter

try {
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    $decoded_array = (array) $decoded;
    print_r($decoded_array);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
