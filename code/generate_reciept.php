<?php
require 'fpdf.php';

// Instantiate and use the FPDF class 
$pdf = new FPDF();
$pdf->AddPage();

// Set the font for the text
$pdf->SetFont('Arial', 'B', 18);

// Prints a cell with given text 
$pdf->Cell(60, 20, 'Patient Reciept');
$pdf->Cell(60, 40, 'Patient Recit');

// return the generated output
$pdf->Output();
