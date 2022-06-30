<html>
<title>welcome</title>
<body>
<div>
    <h1>It works!</h1>
    <ul>
        <li><a href="/workload.php/?value=110">Latency</a> set latency: sleep 110 ms.</li>
        <li><a href="/memwork.php/?value=110&memory=10">Memory workload</a>set workload: use 10 MB memory, and sleep 110 ms.</li>
        <li><a href="/cpuwork.php/?cpu=10">CPU workload</a> set workload: compute md5 for 10,000 numbers.</li>
        <li>Apache:<ul>
        <li><a href="/server-status">server-status</a>get server status for human.</li>
        <li><a href="/server-status/?auto">server-status</a> get server status.</li>
        </ul></li>
    </ul>
</div>
<style type="text/css">
body {
  color: white;
  background-color: <?= $_ENV['COLOR'] ?>;
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
</body>
</html>
