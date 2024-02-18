<?php
require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;

$phoneNumber = '+43 1 22 33 444';

$qrCode = new QrCode($phoneNumber);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
