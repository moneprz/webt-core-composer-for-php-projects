<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>QR-Code</title>
</head>
<body>
<div class="container">
<h1>QR-Code Generator</h1>
<form method="post" action="qrCode.php">
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" required pattern="[0-9\s+-]+" />
    <button type="submit">get QR-Code</button>
</form>
</div>
</body>
</html>
