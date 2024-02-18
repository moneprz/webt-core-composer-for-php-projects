<?php
require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = $_POST['phone'];

    $qrCode = new QrCode($phoneNumber);

    echo '<img src="data:'.$qrCode->getContentType().';base64,'.base64_encode($qrCode->writeString()).'" />';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        form {
            margin-top: 20px;
        }
    </style>
    <title>Pet Emergency Coil Generator</title>
</head>
<body>
<h1>Pet Emergency Coil Generator</h1>

<form method="post">
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" required pattern="[0-9\s+-]+" />
    <button type="submit">Generate QR Code</button>
</form>
</body>
</html>
