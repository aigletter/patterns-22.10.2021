<?php

use patterns\Bridge\CsvFormatter;
use patterns\Bridge\OrderReport;
use patterns\Bridge\PdfFormatter;

include __DIR__ . '/../../vendor/autoload.php';

$report1 = new OrderReport(new CsvFormatter());
$report2 = new OrderReport(new PdfFormatter());

$report1->generate(1);
echo PHP_EOL;
$report2->generate(2);
echo PHP_EOL;


$report3 = new \patterns\Bridge\UserReport(new CsvFormatter());
$report4 = new \patterns\Bridge\UserReport(new PdfFormatter());

$report3->generate(3);
echo PHP_EOL;
$report4->generate(4);