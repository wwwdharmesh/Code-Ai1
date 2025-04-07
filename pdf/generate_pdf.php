<?php
require('fpdf186/fpdf.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize the inputs to avoid potential issues
    $name = htmlspecialchars($_POST['name']);
    $title = htmlspecialchars($_POST['title']);
    $topic = htmlspecialchars($_POST['topic']);

    // Create instance of FPDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Title of the presentation
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(200, 10, 'Presentation: ' . $title, 0, 1, 'C');
    $pdf->Ln(10);

    // Name of the user
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(200, 10, 'Presented by: ' . $name, 0, 1, 'C');
    $pdf->Ln(10);

    // Topic-based content
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(200, 10, 'Topic: ' . ucfirst($topic), 0, 1, 'C');
    $pdf->Ln(10);

    // Add content based on the selected topic
    $pdf->SetFont('Arial', '', 12);
    switch ($topic) {
        case 'science':
            $pdf->MultiCell(0, 10, "Science is the study of the natural world based on facts learned through experiments and observation. It covers a broad range of fields such as physics, chemistry, biology, and more.");
            break;
        case 'history':
            $pdf->MultiCell(0, 10, "History is the study of past events, particularly in human affairs. It involves the exploration of historical documents, artifacts, and various periods that have shaped the world.");
            break;
        case 'technology':
            $pdf->MultiCell(0, 10, "Technology involves the application of scientific knowledge for practical purposes. It includes fields such as computers, electronics, biotechnology, and engineering.");
            break;
        case 'math':
            $pdf->MultiCell(0, 10, "Mathematics is the study of numbers, quantities, shapes, and patterns. It is essential in fields such as science, engineering, and economics.");
            break;
        default:
            $pdf->MultiCell(0, 10, "Please select a valid topic.");
            break;
    }

    // Output the PDF to the browser (showing it first, then downloading if needed)
    $pdf->Output('I', 'presentation.pdf');  // I means inline display in the browser
}
?>
