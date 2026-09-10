<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER</title>
</head>
<body>
    <h2>REGISTER</h2>
    <form method="POST" action="/register">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name"  required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password"  required><br>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>