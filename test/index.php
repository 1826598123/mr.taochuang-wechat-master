<?php

$start=microtime(true);
echo '开始运行时间'.'【'.$start.'】<br>';
include "../autoload.php";
$config = include 'config.php';






$end=microtime(true);
echo '结束运行时间'.'【'.$end.'】<br>';
echo '运行时间'.'【'.($end-$start).'】<br>';
echo '运行内存【'.(memory_get_usage()/1024).'KB】';





