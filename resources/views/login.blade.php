<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form method="POST" action="login">
        @csrf
        <label for="name">Username:</label>
        <input type="text" name="u" required><br>

        <label for="password">Password:</label>
        <input type="password" name="zano"  required><br>

        <button type="submit">Login</button>
    </form>

    <p>
    No account? <a href='/register'>Register<a>
</p> 

</body>
</html>