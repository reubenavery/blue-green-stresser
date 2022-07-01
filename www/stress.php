<?php

header('x-color: ' . $_ENV['COLOR']);
echo $_ENV['COLOR'] . "\n";

###################################################
# Work CPU

$cpu = intval(empty($_GET["cpu"]) ? 1 : $_GET["cpu"]);

$rcpu = rand(1, $cpu) * 1000;
$rcpu = $cpu * 1000;

for ($i = 0; $i < $rcpu; $i++) {
  md5($i);
}
