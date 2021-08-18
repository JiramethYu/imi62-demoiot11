<!DOCTYPE html>
<html>
<body>
   
$response = file_get_contents("https://api.thingspeak.com/channels/1458765/feeds.json?results=2",false,stream_context_create($arrContextOptions));
$json=json_decode($response )
$name=$json->channel->name;  
$humidity=$json->feeds[1]->field1;
$temperature=$json->feeds[1]->field2;
$time=$json->feeds[1]->created_total;
$newtime= date("d-m-Y H:i", strtotime($time));

<h1>62101456 Jirameth Yukachain</h1>
   
<iframe src="https://thingspeak.com/channels/1458765/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" height="500" width="500" frameBorder="0" title="Iframe Example"></iframe>
<iframe src="https://thingspeak.com/channels/1458765/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" height="500" width="500" frameBorder="0" title="Iframe Example"></iframe> 
<iframe src="https://thingspeak.com/channels/1458765/maps/channel_show" height="500" width="500" frameBorder="0" title="Iframe Example"></iframe>   
 <h2>Show Results Data</h2>   
   
     
 </body>
</html>   
