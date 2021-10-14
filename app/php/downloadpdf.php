<?php
require_once '../php/config.php';
require_once '../php/db.php';
require('fpdf.php');


class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image('../images/universitylogo.png', 10, 6, 20, 20);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $w = $this->GetStringWidth('REGISTERED STUDENTS');
        $this->Cell(30, 9, 'REGISTERED STUDENTS', 0, 0, 'C',);
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function BasicTable()
    {
        // $this->SetFillColor(255, 0, 0);
        // $this->SetTextColor(255);
        // $this->SetDrawColor(128, 0, 0);
        // $this->SetLineWidth(.3);
        global $w;
        $db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);

        // Header
        $header = array('Index', 'First Name', 'Last Name', 'Admission Number', 'Profile Photo');
        foreach ($header as $col) {
            $this->SetFont('Arial', 'B', 15);
            $w = $this->GetStringWidth($col) + 10;
            $this->Cell($w, 7, $col, 1);
        }
        $this->Ln();
        // Data
        $id = 1;
        $my_file = "StudentData.txt";

        $stagelevel = $_POST['stagelevel'];
        if ($stagelevel == '25' || $stagelevel == '50' || $stagelevel == '75' || $stagelevel == '100') {
            $data = selectPdfRecords($db, $stagelevel);
            foreach ($data as $row) {
                $this->SetFont('Times', '', 12);
                $this->Cell(23.82, 20, $id, 1);
                $this->Cell(37.3, 20, $row['fname'], 1);
                $this->Cell(36.7, 20, $row['lname'], 1);
                $this->Cell(58.5, 20, $row['adm_number'], 1);
                $x = $this->GetX();
                $y = $this->GetY();
                $this->MultiCell(43, 20, $this->Image($row['profile_picture'], $x + 3, $y + 1, 35, 17), 1);
                $this->Cell(10);
                $this->Ln();
                $id++;
            }
        } else {
            $data = selectRecords($db);
            foreach ($data as $row) {
                $this->SetFont('Times', '', 12);
                $this->Cell(23.82, 20, $id, 1);
                $this->Cell(37.3, 20, $row['fname'], 1);
                $this->Cell(36.7, 20, $row['lname'], 1);
                $this->Cell(58.5, 20, $row['adm_number'], 1);
                $x = $this->GetX();
                $y = $this->GetY();
                $this->MultiCell(43, 20, $this->Image($row['profile_picture'], $x + 3, $y + 1, 35, 17), 1);
                $this->Cell(10);
                $this->Ln();
                $id++;
            }
        }
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->BasicTable();
$pdf->Output();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello World!');
$pdf->Output();
