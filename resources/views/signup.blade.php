<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action='/signup' method='post'>
        <form method="POST" action="signup">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="u" required><br>

        <label for="name">Email:</label>
        <input type="email" name="e" required><br>

        <label for="password">Password:</label>
        <input type="password" name="p"  required><br>

        <label for="confirmation">Confirmation Password:</label>
        <input type="password" name="c"  required><br>


        <button type="submit">Sign Up</button>
    </form>
</body>
</html>