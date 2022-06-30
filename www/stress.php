<?php
  header('x-color: ' . $_ENV['COLOR']);
?>
<html>
<head><title>stressed</title></head>
<body>
<?php
    ###############################################################
    # Usage:
    # http://localhost:8080/stress.php?cpu=10&memory=10&value=110

    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;

    include 'header.php';
?>
<div>
<?php
    $memnum = intval(empty($_GET['memory']) ? 1 : $_GET['memory']);
    $value = intval(empty($_GET['value']) ? 1 : $_GET['value']);

    echo "<h2> Memory Test by constructing a big string ($memnum)</h2>";

    $maxnum = 2048;
    if($memnum > $maxnum) {
        echo "memory usage limit: [1--$maxnum]MB. <br>";
        $memnum = $maxnum;
    }

    $rnum = $value;
    if($value > 1) {
        $rnum = rand($value, $value+3);
    }
    $rmemnum = $memnum *1024*1024;


    echo "sleep $rnum ms, with $memnum MB memory. <br>";

    $base = str_repeat("helloworldhelloworld", 100);
    $base10w = str_repeat($base, 50);
    $base1m = str_repeat($base10w, 10);
    $bigmem = str_repeat($base1m, $rmemnum/(1000*1000.0));
    #$bigmem = array_fill(0, $rmemnum, '');

    $usedMem = round(memory_get_usage()/(1024*1024.0), 2);
    echo "memory used 1: <b> $usedMem MB </b>.";

    usleep(1000*$rnum);

    unset($bigmem);
    echo "<br><br>free memory...<br><br>";
    $usedMem = round(memory_get_usage()/(1024*1024.0), 2);
    echo "memory used 2: <b> $usedMem MB </b>.";

    echo "</center> </p>";
?>
</div>
<hr/>
<div>
<?php
    ###################################################
    # Work CPU

    $cpu = intval(empty($_GET["cpu"]) ? 1 : $_GET["cpu"]);

    echo "<h2> CPU Test by calculating MD5 of numbers. ($cpu $value)</h2>";

    $rcpu = rand($low, $cpu) * 1000;
    $rcpu = $cpu * 1000;
    echo "computation amount: $rcpu <br>";

    $begin = microtime(true);
    for($i=0; $i < $rcpu; $i ++) {
        md5($i);
    }
    $duration = intval((microtime(true) - $begin)*1000);

    echo "used $duration ms";
?>
</div>
<?php
    include 'footer.php';
?>
</body></html>
