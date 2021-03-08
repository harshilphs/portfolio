<?php
require('UserInfo.php');
$ip=UserInfo::get_ip();

//geoLocation from ip
require_once('getGeoLocation.php');

$country=ip_info($ip,"Country");
$state=ip_info($ip,"State");
$city=ip_info($ip,"City");

$device=UserInfo::get_device();
$os=UserInfo::get_os();
$browser=UserInfo::get_browser();

// set the timezone first
if(function_exists('date_default_timezone_set')) {
  date_default_timezone_set("Asia/Kolkata");
}

$date=date("d/m/Y");
$time=date("h:i:s A");

require_once('pdo.php');

$stmt = $pdo->prepare('INSERT INTO clients (visitor_ip, visitor_device, visitor_os, visitor_browser, visitor_date, visitor_time,visitor_country,visitor_state,visitor_city) VALUES ( :ip, :device, :os, :browser, :date, :time,:country,:state,:city)');

$stmt->execute(array(
    ':ip' => $ip,
    ':device' => $device,
    ':os' => $os,
    ':browser' => $browser,
    ':date' => $date,
    ':time' => $time,
    ':country' => $country,
    ':state' => $state,
    ':city' => $city)
);
?>


