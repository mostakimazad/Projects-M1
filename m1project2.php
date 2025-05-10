<?php
function convertTemperature($temperature, $unit) {
    if ($unit === "C") {
        // here Celsius to Fahrenheit
        $converted = ($temperature * 9/5) + 32;
        $unitConverted = "F";
    } elseif ($unit === "F") {
        // here Fahrenheit to Celsius
        $converted = ($temperature - 32) * 5/9;
        $unitConverted = "C";
    } else {
        return "Invalid unit. Please use 'C' for Celsius or 'F' for Fahrenheit.";
    }

    return $temperature . "°" . $unit . " is " . $converted . "°" . $unitConverted;
}


$temperature = 25; // your desired temperature
$unit = "C"; 

echo convertTemperature($temperature, $unit);


?>
