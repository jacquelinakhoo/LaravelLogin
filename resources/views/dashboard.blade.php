<!DOCTYPE html>
<html lang="en">
<head>
    <title>DASHBOARD</title>
</head>
<body>
    <h1>Welcome,     <?php
     echo session('u');
?>
 to the Dashboard</h1>
    <p>
    <button><a href="/logout">Logout</a></button>
</p>
 
<table border='1' width='550'>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
</tr>
<tr>

<?php
    $no=1;
    foreach ($Sepno as $key => $value) {
    
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value->name ?></td>
        <td><?= $value->email ?></td>
</tr>
<?php
    }
?>
</table>

</body>
</html>