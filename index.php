<?php

date_default_timezone_set('America/Lima');
require_once "./vendor/autoload.php";



use \Firebase\JWT\JWT;



$key = base64_decode("pG1VvOtDZMtZAylyM+k62Ut1AxQWFUmodq0hj9+TGBs=");
$jwt = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJSRTpMb2dpbiIsImlhdCI6MTU4NjkzMzg5NywiZXhwIjoxNTg2OTM0MTk3LCJtZXNzYWdlIjpbeyJpZCI6IjEiLCJ1c2VyIjoiYWRyaWFuIiwicGFzcyI6ImFkcmlhbiIsIm5vbWJyZSI6ImFkcmlhbiIsImFwZWxsaWRvIjoiYWRyaWFuIn1dfQ.uymbJwVkQamlW9BKB4HVyCRSnMbrBpZearsezicFcRc";
$decoded = JWT::decode($jwt, $key, array('HS256'));
print_r($decoded);



/*date_default_timezone_set('America/Lima');

require_once "./vendor/autoload.php";

use \Firebase\JWT\JWT;

JWT::$leeway = 300;

$iat = new DateTime("now", new DateTimeZone('America/Lima'));

$nbf = new DateTime("now", new DateTimeZone('America/Lima'));
$nbf->modify('+5 minutes');

printf($iat->getTimestamp() . "\n");
printf($nbf->getTimestamp() . "\n");


$key = "pG1VvOtDZMtZAylyM+k62Ut1AxQWFUmodq0hj9+TGBs=";
$payload = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => $iat->getTimestamp(),
    "nbf" =>  $nbf->getTimestamp()
);

*/

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
/*$jwt = JWT::encode($payload, $key);
$decoded = JWT::decode($jwt, $key, array('HS256'));

print_r($decoded);

$key = "pG1VvOtDZMtZAylyM+k62Ut1AxQWFUmodq0hj9+TGBs=";

$jwt = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJMb2dpbkRhdGEiLCJVc3VhcmlvIjoiMSIsIkNvbnRyYXNlbmEiOiIxIiwiaWF0IjoxNTg2NTAwNjc2LCJleHAiOjE1ODY1MDA5NzZ9.kcq6T_5_32WY84Eg1rZcly3wP73kr3qgDA3C7dy8kwE";
$decoded = JWT::decode($jwt, $key, array('HS256'));

print_r($decoded);*/

/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

//$decoded_array = (array) $decoded;

/**
 * You can add a leeway to account for when there is a clock skew times between
 * the signing and verifying servers. It is recommended that this leeway should
 * not be bigger than a few minutes.
 *
 * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
 */
 // $leeway in seconds
//$decoded = JWT::decode($jwt, $key, array('HS256'));



?>