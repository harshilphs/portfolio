<?php
$pdo = new PDO('mysql:host=localhost;dbname=xyz','root','');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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


