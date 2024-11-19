<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
</head>
<body>
    <h1>Guess the Number</h1>
    <p id="response">MAKE A GUESS (1-100):</p>

    <form method="POST" action="gg-server.php">
        <input type="number" name="guess" required>
        <button type="submit">Submit</button>
    </form>

    <form method="POST" action="gg-server.php" style="margin-top: 10px;">
        <input type="hidden" name="reset" value="true">
        <button type="submit">Reset Game</button>
    </form>
    
</body>
</html>