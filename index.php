<?php

$api_url = ' https://api.thingspeak.com/channels/1458765/feeds.json?results=2';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$user_data = $response_data->data;
$user_data = array_slice($user_data, 0, 9);

foreach ($user_data as $user) {
	echo "name: ".$user->Temperature;
	echo "<br />";
	echo "name: ".$user->Huminity;
	echo "<br /> <br />";
}

?>
