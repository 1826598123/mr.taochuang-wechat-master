<?php

echo '<pre>';
print_r($_GET);exit;

include "../autoload.php";
$config = include 'config.php';

$data=new \WeChat\User($config);
$res=$data->UserAccessToken($code);
$new=new \WeChat\Init($config);


echo '<pre>';
print_r($data->CheckAccessToken($res['access_token'],$res['openid']));