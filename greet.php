<?php

// echo htmlspecialchars("Hi! ". $_GET['name'], ENT_QUOTES, "utf-8");

$rs = array(
    "message" => htmlspecialchars("Hi! ". $_GET['name'], ENT_QUOTES, "utf-8"),
    "length" => strlen($_GET['name'])
);

header('Content-Type: application/json; charset=utf-8' );
echo json_encode($rs);