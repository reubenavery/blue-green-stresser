<?php

    $client_ip = $_SERVER['REMOTE_ADDR']?:$_SERVER['HTTP_CLIENT_IP'];
    $forward_for = $_SERVER['HTTP_X_FORWARDED_FOR'];

    echo "<hr/>";
    echo "<p><center>";
    echo "<br> version 0.2.0<br/>";
    echo "Host: ". $_SERVER['HTTP_HOST'];
    echo "<br/>";
    echo "IP: ". $_SERVER['SERVER_ADDR'];
    echo "<br/>";
    echo "Container: ". gethostname() ;
    echo "<br/>";
    echo "clientIP: $client_ip";
    echo "<br/>";
    if (strlen($forward_for) > 0) { 
        echo "forward for: ($forward_for)";
        echo "<br/>";
    }
    echo "<br/>";

    echo "<a href='/index.html'>Home</a>";
    echo "</center></p>";
?>
<style type="text/css">
body {
  color: white;
  background-color: <?= $_ENV['COLOR'] ?>;
<?php
  echo 'border-color:'.$COLOR.';'.$EC2_AZ;
?>
}
a {
  color: #FF0;
  text-decoration: none;
}
a:hover {
  color: #0FF;
  text-decoration: underline;
}
</style>
