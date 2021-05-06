<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "2707638549-J4v0HGZ1CU84ali7vJwEDVqclbKSKSIA0t660te",
    'oauth_access_token_secret' => "YdhXskDvXVa7nd9abtcfKcmRAoUl84D3nRDDK6U2ASzLkQ",
    'consumer_key' => "VtN5XZtSbUnZyPRM2lulNhSL6",
    'consumer_secret' => "YKflVrwa5soGyoFiNQuDlGr9BRZ03xGdkQF7Dj6URl2hgU7zDY"
);

$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST'; 

$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();

?>
