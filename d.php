<?php
// Paths to your files
$htmlFile1 = 'D:/dk/footer1.html';
$cssFile1 = 'D:/dk/footer1.css';
$jsFile1 = 'D:/dk/footer1.js';

$htmlFile2 = 'D:/dk/footer2.html';
$cssFile2 = 'D:/dk/footer2.css';
$jsFile2 = 'D:/dk/footer2.js';

$htmlFile3 = 'D:/dk/footer3.html';
$cssFile3 = 'D:/dk/footer3.css';
$jsFile3 = 'D:/dk/footer3.js';

$htmlFile4 = 'D:/dk/footer4.html';
$cssFile4 = 'D:/dk/footer4.css';
$jsFile4 = 'D:/dk/footer4.js';

// Function to read file content safely
function getFileContent($filePath) {
    return file_exists($filePath) ? file_get_contents($filePath) : 'File not found';
}

// Output the content based on footer ID
if (isset($_GET['footerId'])) {
    $footerId = (int)$_GET['footerId'];
    if ($footerId == 1) {
        echo json_encode([
            'html' => getFileContent($htmlFile1),
            'css' => getFileContent($cssFile1),
            'js' => getFileContent($jsFile1),
        ]);
    } elseif ($footerId == 2) {
        echo json_encode([
            'html' => getFileContent($htmlFile2),
            'css' => getFileContent($cssFile2),
            'js' => getFileContent($jsFile2),
        ]);
    } elseif ($footerId == 3) {
        echo json_encode([
            'html' => getFileContent($htmlFile3),
            'css' => getFileContent($cssFile3),
            'js' => getFileContent($jsFile3),
        ]);
    } elseif ($footerId == 4) {
        echo json_encode([
            'html' => getFileContent($htmlFile4),
            'css' => getFileContent($cssFile4),
            'js' => getFileContent($jsFile4),
        ]);
    }
}
?>
