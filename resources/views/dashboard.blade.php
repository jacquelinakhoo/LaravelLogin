<!DOCTYPE html>
<html lang="en">
<head>
    <title>DASHBOARD</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <?php
     echo session('u');
?>
    <p1>berhasil login</p1>
    <button><a href="/logout">Logout</a></button>
 
</body>
</html>