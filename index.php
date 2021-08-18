<!DOCTYPE html>
<html>
    
<?php
$arrContextOptions=arry(
    "ssl"->arry(
        "verify_peer"->false,
        "verify_peer_name"->false,
    ),
);

$response = file_get_contents("https://api.thingspeak.com/channels/1458765/feeds.json?results=2",false,stream_context_create($arrContextOptions));
$json=json_decode($response )
$name=$json->channel->name;
$humidity=$json->feeds[1]->field1;
$temperature=$json->feeds[1]->field2;

$time=$json->feeds[1]->created_total;
$newtime= date("d-m-Y H:i", strtotime($time));
?>

<h1>62101456 Jirameth Yukachain</h1>
<br>

<div class ="container">
    <div class="row">
        <div class="col-sm-7">
<h2>Display Board</h2>
<div class ="container">
    <div class="row">
    <iframe class="col" src="https://thingspeak.com/channels/1458765/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" title="Humidity"></iframe>
    </div>
</br>
    <div class="row">
    <iframe class="col" src="https://thingspeak.com/channels/1458765/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" title="Temperature"></iframe>
    </div>
</br>    
<div class="row">
    <iframe class="col" src="https://thingspeak.com/channels/1458765/maps/channel_show" title="Location"></iframe>
    </div>
</br>    

</div>
     </div>
     
</body>
</html>
