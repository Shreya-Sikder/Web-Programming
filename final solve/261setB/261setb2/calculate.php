<?php
if (isset($_POST['submit'])) {
    $distance = $_POST['distance'];
    $energy = $_POST['energy'];
    $battery = $_POST['battery'];
    $total_energy = $distance * $energy;
    $battery_module = ceil($total_energy / $battery);
    $unused_energy = ($battery * $battery_module) - $total_energy;
    echo "total energy required" . $total_energy . "<br>";
    echo "battery modules:" . $battery_module . "<br>";
    echo "unused energy:" . $unused_energy . "<br>";
    $percentage = ($unused_energy / $total_energy) * 100;
    if ($percentage <= 10)
        echo "efficient<br>";
    else if ($percentage <= 25)
        echo "acceptable<br>";
    else
        echo "wasteful";

}






?>