<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "2707638549-J4v0HGZ1CU84ali7vJwEDVqclbKSKSIA0t660te",
    'oauth_access_token_secret' => "YdhXskDvXVa7nd9abtcfKcmRAoUl84D3nRDDK6U2ASzLkQ",
    'consumer_key' => "VtN5XZtSbUnZyPRM2lulNhSL6",
    'consumer_secret' => "YKflVrwa5soGyoFiNQuDlGr9BRZ03xGdkQF7Dj6URl2hgU7zDY"
);

$url = 'https://upload.twitter.com/1.1/media/upload.json';
$getfield = '?command=STATUS&media_id=710511363345354753';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>
    <h1>Titel</h1>
</body>
</html>
