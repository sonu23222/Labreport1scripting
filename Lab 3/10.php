<?php


$validUsers = [
    "sonu" => "sonu123",
    "user" => "pass456",
];

$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';


if (array_key_exists($userid, $validUsers) && $validUsers[$userid] === $password) {
    echo "success";
} else {
    echo "fail";
}