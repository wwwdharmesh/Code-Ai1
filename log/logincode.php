<?php
// Paths to your files
$htmlFile1 = 'D:/lo1/a.html';
$cssFile1 = 'D:/hd/no';
$jsFile1 = 'D:/hd/no';

$htmlFile2 = 'D:/lo1/b.html';
$cssFile2 = 'D:/hd/no';
$jsFile2 = 'D:/hd/no';

$htmlFile3 = 'D:/lo1/c.html';
$cssFile3 = 'D:/dk/no';
$jsFile3 = 'D:/lo1/main.ja';

$htmlFile4 = 'D:/lo1/d.html';
$cssFile4 = 'D:/hd/no';
$jsFile4 = 'D:/lo1/main2.js';

$htmlFile5 = 'D:/lo1/f.html';
$cssFile5 = 'D:/hd/no.css';
$jsFile5 = 'D:/lo1/main3.js';

$htmlFile6 = 'D:/lo1/e.html';  
$cssFile6 = 'D:/lo1/style.css';       
$jsFile6 = 'D:/dk/no'; 

$htmlFile7 = 'D:/dk/g.html';
$cssFile7 = 'D:/dk/style6.css';
$jsFile7 = 'D:/dk/no';

// Function to read file content safely
function getFileContent($filePath) {
    return file_exists($filePath) ? file_get_contents($filePath) : 'File not found';
}

// Output the content based on login ID
if (isset($_GET['loginId'])) {
    $loginId = (int)$_GET['loginId'];

    if ($loginId == 1) {
        echo json_encode([
            'html' => getFileContent($htmlFile1),
            'css' => getFileContent($cssFile1),
            'js' => getFileContent($jsFile1),
        ]);
    } elseif ($loginId == 2) {
        echo json_encode([
            'html' => getFileContent($htmlFile2),
            'css' => getFileContent($cssFile2),
            'js' => getFileContent($jsFile2),
        ]);
    } elseif ($loginId == 3) {
        echo json_encode([
            'html' => getFileContent($htmlFile3),
            'css' => getFileContent($cssFile3),
            'js' => getFileContent($jsFile3),
        ]);
    } elseif ($loginId == 4) {
        echo json_encode([
            'html' => getFileContent($htmlFile4),
            'css' => getFileContent($cssFile4),
            'js' => getFileContent($jsFile4),
        ]);
    } elseif ($loginId == 5) {
        echo json_encode([
            'html' => getFileContent($htmlFile5),
            'css' => getFileContent($cssFile5),
            'js' => getFileContent($jsFile5),
        ]);
    } elseif ($loginId == 6) {
        echo json_encode([
            'html' => getFileContent($htmlFile6),
            'css' => getFileContent($cssFile6),
            'js' => getFileContent($jsFile6),
        ]);
    } elseif ($loginId == 7) {
        echo json_encode([
            'html' => getFileContent($htmlFile7),
            'css' => getFileContent($cssFile7),
            'js' => getFileContent($jsFile7),
        ]);
    }
}
?>
