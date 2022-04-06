<?php

if(!isset($_GET["swname"])){
    $data = [
        "error" => "swname"
    ];
} else {
    $network = rand(1,254);
    $data = [
        "ipconf" => [
            "ip" => "10.10." . $network . "." . rand(1,253),
            "netmask" => "255.255.255.0",
            "gateway" => "10.10." . $network . ".254"
        ]
    ];
}

header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header("Access-Control-Allow-Headers: *");
echo json_encode($data);
exit();