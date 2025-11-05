<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration - 25rp18795 STUDENT MIS</title>
</head>
<body>
    <h1>USER REGISTRATION</h1>
    <form action="process.php" method="POST">
        <div>
            <label for="names">Names:</label>
            <input type="text" id="names" name="names" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>