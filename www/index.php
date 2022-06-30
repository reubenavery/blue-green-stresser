<html>
<title>welcome</title>
<body style="background: <?= $_ENV["COLOR"]; ?>;">
<div>
    <h1>It works</h1>
    <ul>
        <li><a href="/workload.php/?value=110">Latency</a><span>set latency: sleep 110 ms.</span></li>
        <li><a href="/memwork.php/?value=110&memory=10">Memory workload</a><span>set workload: use 10 MB memory, and sleep 110 ms.</span></li>
        <li><a href="/cpuwork.php/?cpu=10">CPU workload</a><span>set workload: compute md5 for 10,000 numbers.</span></li>
        <li><a href="/server-status">server-status</a><span>get server status for human.</span></li>
        <li><a href="/server-status/?auto">server-status</a><span>get server status.</span></li>
    </ul>
</div>
</body>
</html>
