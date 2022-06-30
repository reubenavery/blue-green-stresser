<?php
    header('x-color: ' . $_ENV['COLOR']);

    echo "<html>";
    echo "<head> <title> Latency Test </title> </head>";
    echo "<body>";

    include 'header.php';

    echo "<p> <center>";
    echo "<h2>Latency Test by Sleeping</h2>";

    $num = rand(100*1000, 500*1000);
    $tmp = $num/1000;
    echo "sleep $tmp ms";
    usleep($num);

    echo "</center> </p>";
    include 'footer.php';
    echo "</body></html>";
