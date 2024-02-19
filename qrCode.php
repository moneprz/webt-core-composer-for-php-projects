<?php
require 'vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = $_POST['phone'];

    $result = Builder::create()
        ->writer(new PngWriter())
        ->writerOptions([])
        ->data($phoneNumber)
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel(ErrorCorrectionLevel::High)
        ->size(300)
        ->margin(10)
        ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
        ->logoPath(__DIR__.'/assets/symfony.png')
        ->logoResizeToWidth(50)
        ->logoPunchoutBackground(true)
        ->labelText($phoneNumber)
        ->labelFont(new NotoSans(20))
        ->labelAlignment(LabelAlignment::Center)
        ->validateResult(false)
        ->build();

    header('Content-Type: '.$result->getMimeType());
    echo $result->getString();
} else {
    header('Location: index.php');
    exit();
}
?>
