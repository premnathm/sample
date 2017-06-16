<?php 
$address = 'Fort Worth, TX, United States';
echo "User Address is: ".$address."<br />";
$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');// We get the JSON results from this request
$geo = json_decode($geo, true);// We convert the JSON to an array
if ($geo['status'] = 'OK') {
// We set our values
echo 'Latitude of the given location: '.$latitude = $geo['results'][0]['geometry']['location']['lat'];
echo "<br/>";
echo 'Logitude of the given location: '.$longitude = $geo['results'][0]['geometry']['location']['lng'];
echo "<br/>";

$google_time = file_get_contents("https://maps.googleapis.com/maps/api/timezone/json?location=$latitude,$longitude&timestamp=1331161200&key=AIzaSyAtpji5Vk271Qu6_QFSBXwK7wpoCQLY-zQ");
$timez = json_decode($google_time);

echo 'Timezone of the given location: '.$timez->timeZoneId;
echo "<br />";
date_default_timezone_set($timez->timeZoneId); //Change the timezone of your default system

$sun_info = date_sun_info(strtotime("2016/10/22"), $latitude, $longitude);
foreach ($sun_info as $key => $val) {

echo "$key: " . date("g:i:s A", $val) . "<br />";

}
}

?>