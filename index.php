<?php

include('vendor/autoload.php');
$client = new Guzzle\Http\Client();
$request = $client->get('http://www.google.com');

$result = $request->send();
print_r($result);

?>
