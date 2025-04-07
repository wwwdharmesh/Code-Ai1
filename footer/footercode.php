<?php
// Paths to your files
$htmlFile1 = 'D:/dk/a.html';
$cssFile1 = 'D:/dk/style1.css';
$jsFile1 = 'D:/dk/footer1.js';

$htmlFile2 = 'D:/dk/b.html';
$cssFile2 = 'D:/dk/style2.css';
$jsFile2 = 'D:/dk/footer2.js';

$htmlFile3 = 'D:/dk/c.html';
$cssFile3 = 'D:/dk/style3.css';
$jsFile3 = 'D:/dk/footer3.js';

$htmlFile4 = 'D:/dk/d.html';
$cssFile4 = 'D:/dk/style4.css';
$jsFile4 = 'D:/dk/footer4.js';

$htmlFile5 = 'D:/dk/e.html';
$cssFile5 = 'D:/dk/style5.css';
$jsFile5 = 'D:/dk/j1.js';

$htmlFile6 = 'D:/dk/f.html';  
$cssFile6 = 'D:/dk/no';       
$jsFile6 = 'D:/dk/no'; 

$htmlFile7 = 'D:/dk/g.html';
$cssFile7 = 'D:/dk/style6.css';
$jsFile7 = 'D:/dk/no';


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
    } elseif ($footerId == 5) {
        echo json_encode([
            'html' => getFileContent($htmlFile5),
            'css' => getFileContent($cssFile5),
            'js' => getFileContent($jsFile5),
        ]);
    } elseif ($footerId == 6) { // Corrected variable for footerId 6
        echo json_encode([
            'html' => getFileContent($htmlFile6),
            'css' => getFileContent($cssFile6),
            'js' => getFileContent($jsFile6),
        ]);
    }  elseif ($footerId == 7) { // Corrected variable for footerId 6
    echo json_encode([
        'html' => getFileContent($htmlFile7),
        'css' => getFileContent($cssFile7),
        'js' => getFileContent($jsFile7),
    ]);
    }
}
?>
