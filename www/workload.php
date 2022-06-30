<?php
    $num = intval($_GET["value"]);

    if ($num < 1) {
        $num = intval($_POST['value']);
    }

    if($num < 1) {
        $num = 1;
    }

    $low = $num - 2;
    if($low < 1) {
        $low = 1;
    }

    echo "<html>";
    echo "<head><title>Latency Test</title></head>";
    echo "<h2>Latency Test by Sleeping</h2>";
    echo "<body>";
    include 'header.php';
    echo "<p> <center>";

    $rnum = rand($low, $num+2);
    echo "sleep $rnum ms <br>";
    usleep(1000*$rnum);

    echo "</center> </p>";
    include 'footer.php';
    echo "</body></html>";
?>
