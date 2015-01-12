<?php
require_once __DIR__.'/vendor/autoload.php';

$worker = new \Kohkimakimoto\Worker\Worker();

$worker->job("hello", ['cron_time' => '* * * * *', 'command' => function(){
        echo "Hello world\n";
}]);

$worker->start();
