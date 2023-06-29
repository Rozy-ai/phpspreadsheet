<?php

require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Фамилия');
$sheet->setCellValue('B1', 'Имя');
$sheet->setCellValue('C1', 'Адрес e-mail');

$sheet->setCellValue('A2', 'Джумаев');
$sheet->setCellValue('B2', 'Розы');
$sheet->setCellValue('C2', 'jumayewrozy@gmail.com');


$writer = new Xlsx($spreadsheet);
$writer->save('test.xlsx');

echo "File created successfully!";

?>