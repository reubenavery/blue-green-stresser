<html>
<title>welcome <?= $_ENV['COLOR'] ?></title>
<body>
<?php
    include 'header.php';
?>
<div>
    <h1>It Works!</h1>
    <ul>
        <li><a href="/stress.php?cpu=10&memory=10&value=110">Generate random CPU and Memory load</li>
        <li><a href="/workload.php/?value=110">Latency</a> set latency: sleep 110 ms.</li>
        <li><a href="/memwork.php/?value=110&memory=10">Memory workload</a>set workload: use 10 MB memory, and sleep 110 ms.</li>
        <li><a href="/cpuwork.php/?cpu=10">CPU workload</a> set workload: compute md5 for 10,000 numbers.</li>
        <li>Apache:<ul>
        <li><a href="/server-status">server-status</a> for human.</li>
        <li><a href="/server-status/?auto">server-status</a> for auto.</li>
        </ul></li>
    </ul>
</div>
<?php
  include 'footer.php';
?>
</body>
</html>
