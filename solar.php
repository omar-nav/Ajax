<?php
$WeatherSource = "https://api.forecast.io/forecast/b1b38ee039d2638dd6359622b2e938cc/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>