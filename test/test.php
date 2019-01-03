<?php

echo '<pre>';
$code=$_GET['code'];

include "../autoload.php";
$config = include 'config.php';
echo '<pre>';
$data=\Driver\WeChat::User($config)->UserAccessToken($code);
print_r($data);

