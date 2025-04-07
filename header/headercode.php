<?php
// Paths to your files
$htmlFile1 = 'D:/hd/a.html';
$cssFile1 = 'D:/hd/style1.css';
$jsFile1 = 'D:/hd/main1.js';

$htmlFile2 = 'D:/hd/b.html';
$cssFile2 = 'D:/hd/style2.css';
$jsFile2 = 'D:/hd/main2.js';

$htmlFile3 = 'D:/hd/c.html';
$cssFile3 = 'D:/hd/style3.css';
$jsFile3 = 'D:/dk/no';

$htmlFile4 = 'D:/hd/d.html';
$cssFile4 = 'D:/hd/style4.css';
$jsFile4 = 'D:/dk/no';

$htmlFile5 = 'D:/hd/e.html';
$cssFile5 = 'D:/hd/no.css';
$jsFile5 = 'D:/hd/no.js';

$htmlFile6 = 'D:/hd/f.html';  
$cssFile6 = 'D:/hd/style5.css';       
$jsFile6 = 'D:/dk/no'; 



// Function to read file content safely
function getFileContent($filePath) {
    return file_exists($filePath) ? file_get_contents($filePath) : 'natting used';
}

// Output the content based on header ID
if (isset($_GET['headerId'])) {
    $headerId = (int)$_GET['headerId'];

    if ($headerId == 1) {
        echo json_encode([
            'html' => getFileContent($htmlFile1),
            'css' => getFileContent($cssFile1),
            'js' => getFileContent($jsFile1),
        ]);
    } elseif ($headerId == 2) {
        echo json_encode([
            'html' => getFileContent($htmlFile2),
            'css' => getFileContent($cssFile2),
            'js' => getFileContent($jsFile2),
        ]);
    } elseif ($headerId == 3) {
        echo json_encode([
            'html' => getFileContent($htmlFile3),
            'css' => getFileContent($cssFile3),
            'js' => getFileContent($jsFile3),
        ]);
    } elseif ($headerId == 4) {
        echo json_encode([
            'html' => getFileContent($htmlFile4),
            'css' => getFileContent($cssFile4),
            'js' => getFileContent($jsFile4),
        ]);
    } elseif ($headerId == 5) {
        echo json_encode([
            'html' => getFileContent($htmlFile5),
            'css' => getFileContent($cssFile5),
            'js' => getFileContent($jsFile5),
        ]);
    } elseif ($headerId == 6) {
        echo json_encode([
            'html' => getFileContent($htmlFile6),
            'css' => getFileContent($cssFile6),
            'js' => getFileContent($jsFile6),
        ]);
    } elseif ($headerId == 7) {
        echo json_encode([
            'html' => getFileContent($htmlFile7),
            'css' => getFileContent($cssFile7),
            'js' => getFileContent($jsFile7),
        ]);
    }
}
?>
