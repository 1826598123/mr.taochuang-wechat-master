<?php



include "../autoload.php";
$config = include 'config.php';



$data = new \WeChat\Media($config);

$options='{
    "action": "all",
    "check_operator": "DEFAULT"
}';
//D6oOKOPQChtWT5ZywfkdWubi3a5La7FzQmGJIrGp5PLQ8YEaoHu9ihnQlGmoNeZ7
//7WfzbuN6u0y24b7vSK9dWwOl55WqX4DaWIGQKczccvSH14xy_dkLzOeJvSvh-mKF
//SuGBzj71iJJu1Se9SSN58p7UVS3yHEGFAzMnIDC8HO4
//一次性订阅 ：Vtb08low8_gQ9VNWvPs6qo_fskfRml4-YS-ophZHwCc
//永久media_id C_TSLMlMArqgZ8SNHxan0_3lYeQFk4xupGHVnSx-pss
//detalis.jpg
//C_TSLMlMArqgZ8SNHxan0-d6RZVNrUBPht1G4tTPTVo



echo \Driver\WeChat::We($config)->getAccessToken();






