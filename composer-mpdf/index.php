<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1 style="text-align: center;">Hello world!</h1>');
$mpdf->WriteHTML('<p style="text-align: center;">O birt ainda vai dominar o mundo!</p>');
$mpdf->Output();
?>