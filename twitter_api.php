<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "2707638549-J4v0HGZ1CU84ali7vJwEDVqclbKSKSIA0t660te",
    'oauth_access_token_secret' => "YdhXskDvXVa7nd9abtcfKcmRAoUl84D3nRDDK6U2ASzLkQ",
    'consumer_key' => "VtN5XZtSbUnZyPRM2lulNhSL6",
    'consumer_secret' => "YKflVrwa5soGyoFiNQuDlGr9BRZ03xGdkQF7Dj6URl2hgU7zDY"
);

$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=KikiPehar';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>
    <blockquote class="twitter-tweet" data-lang="en">
    <p lang="de" dir="ltr">Wir sind doch nur Marionetten der Politik, die uns von vorne bis hinten fickt.</p>&mdash; Kristijan Pehar (@KikiPehar) <a href="https://twitter.com/KikiPehar/status/1017543367977299968">13. Juli 2018</a>
    </blockquote>
</body>
</html>
