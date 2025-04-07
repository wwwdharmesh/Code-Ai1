<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title'] ?? '');
    $menuItems = array_map('trim', explode(',', $_POST['menu'] ?? ''));
    $color = $_POST['color'] ?? '#007bff';
    $titleAlign = $_POST['titleAlign'] ?? 'center';
    $minHeight = intval($_POST['minHeight'] ?? 50);
    $maxHeight = intval($_POST['maxHeight'] ?? 100);
    $language = $_POST['language'] ?? 'html';
    $icon = $_POST['icon'] ?? ''; // Independent icon
    $customButtonText = $_POST['customButtonText'] ?? '';
    $buttonWidth = $_POST['buttonWidth'] ?? 'auto'; // Button width
    $buttonHeight = $_POST['buttonHeight'] ?? 'auto'; // Button height

    // Handle logo upload
    $logoTag = "";
    $logoURL = "";
    if (!empty($_FILES['logo']['name']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/bca-6/header/uploads/";

        // Ensure uploads directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Validate file type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp','image/jpg'];
        if (!in_array($_FILES['logo']['type'], $allowedTypes)) {
            echo "<p style='color:red;'>Error: Only JPG, PNG, GIF, and WEBP files are allowed!</p>";
            exit;
        }

        // Generate unique filename
        $fileName = time() . "_" . basename($_FILES['logo']['name']);
        $logoPath = $uploadDir . $fileName;

        // Move uploaded file
        if (move_uploaded_file($_FILES['logo']['tmp_name'], $logoPath)) {
            $baseURL = "http://" . $_SERVER['HTTP_HOST'] . "/bca-6/header/uploads/";
            $logoURL = $baseURL . $fileName;
            $logoTag = "<img src='$logoURL' alt='Logo' style='height: 50px; margin-right: 20px;'>";
        } else {
            echo "<p style='color:red;'>Error: File upload failed!</p>";
        }
    }

    // Create menu items
    $menuHTML = "";
    foreach ($menuItems as $item) {
        if (!empty($item)) {
            $menuHTML .= "<a href='#' style='margin: 0 15px; color: white; font-weight: bold; text-decoration: none;'>$item</a>\n";
        }
    }

    // Generate header HTML
    $headerHTML = "<div class='header' style='background: $color; padding: 15px; display: flex; align-items: center; min-height: {$minHeight}px; max-height: {$maxHeight}px;'>";

    if (!empty($logoTag)) {
        $headerHTML .= "<div class='logo'>$logoTag</div>";
    }

    $headerHTML .= "<h2 style='margin: 0; text-align: $titleAlign; flex: 1; color: white;'>$title</h2>";

    if (!empty($menuHTML)) {
        $headerHTML .= "<nav>$menuHTML</nav>";
    }
    if (!empty($icon)) {
        $headerHTML .= "<i class='fa $icon' style='color: white; font-size: 20px; margin-right: 10px; display: inline-block;'></i>";
    }

    // Add custom button if text is provided
    if (!empty($customButtonText)) {
        $headerHTML .= "<button style='width: $buttonWidth; height: $buttonHeight;'>$customButtonText</button>";
    }

    $headerHTML .= "</div>";

    // Generate code based on selected language
    $generatedCode = "";
    switch ($language) {
        case 'php':
            $generatedCode = "<?php\n";
$generatedCode .= "// Generated header code\n";
$generatedCode .= "echo \"<!DOCTYPE html>\\n\";\n";
$generatedCode .= "echo \"<html lang='en'>\\n\";\n";
$generatedCode .= "echo \"<head>\\n\";\n";
$generatedCode .= "echo \"    <meta charset='UTF-8'>\\n\";\n";
$generatedCode .= "echo \"    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>\\n\"; // Include Font Awesome\n";
$generatedCode .= "echo \"    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\\n\";\n";
$generatedCode .= "echo \"    <title>Generated Header</title>\\n\";\n";
$generatedCode .= "echo \"    <style>\\n\";\n";
$generatedCode .= "echo \"        .header {\\n\";\n";
$generatedCode .= "echo \"            background: $color;\\n\";\n";  // Corrected concatenation
$generatedCode .= "echo \"            padding: 15px;\\n\";\n";
$generatedCode .= "echo \"            display: flex;\\n\";\n";
$generatedCode .= "echo \"            align-items: center;\\n\";\n";
$generatedCode .= "echo \"            min-height: {$minHeight}px;\\n\";\n";
$generatedCode .= "echo \"            max-height: {$maxHeight}px;\\n\";\n";
$generatedCode .= "echo \"        }\\n\";\n";
$generatedCode .= "echo \"        .header h2 {\\n\";\n";
$generatedCode .= "echo \"            flex: 1;\\n\";\n";
$generatedCode .= "echo \"            text-align: $titleAlign;\\n\";\n";
$generatedCode .= "echo \"            color: white;\\n\";\n";
$generatedCode .= "echo \"        }\\n\";\n";
$generatedCode .= "echo \"        .header nav a {\\n\";\n";
$generatedCode .= "echo \"            margin: 0 15px;\\n\";\n";
$generatedCode .= "echo \"            color: white;\\n\";\n";
$generatedCode .= "echo \"            font-weight: bold;\\n\";\n";
$generatedCode .= "echo \"            text-decoration: none;\\n\";\n";
$generatedCode .= "echo \"        }\\n\";\n";
$generatedCode .= "echo \"        .header button {\\n\";\n";
$generatedCode .= "echo \"            width: {$buttonWidth}px;\\n\";\n";  // Corrected concatenation
$generatedCode .= "echo \"            height: {$buttonHeight}px;\\n\";\n"; // Corrected concatenation
$generatedCode .= "echo \"            padding: 10px 20px;\\n\";\n";
$generatedCode .= "echo \"            background: linear-gradient(135deg, #007bff, #0056b3);\\n\";\n";
$generatedCode .= "echo \"            color: white;\\n\";\n";
$generatedCode .= "echo \"            border: none;\\n\";\n";
$generatedCode .= "echo \"            cursor: pointer;\\n\";\n";
$generatedCode .= "echo \"            font-size: 1.2em;\\n\";\n";
$generatedCode .= "echo \"            font-weight: 500;\\n\";\n";
$generatedCode .= "echo \"            border-radius: 8px;\\n\";\n";
$generatedCode .= "echo \"            transition: 0.3s ease-in-out;\\n\";\n";
$generatedCode .= "echo \"        }\\n\";\n";
$generatedCode .= "echo \"        .header button:hover {\\n\";\n";
$generatedCode .= "echo \"            background: linear-gradient(135deg, #0056b3, #003d82);\\n\";\n";
$generatedCode .= "echo \"        }\\n\";\n";
$generatedCode .= "echo \"    </style>\\n\";\n";
$generatedCode .= "echo \"</head>\\n\";\n";
$generatedCode .= "echo \"<body>\\n\";\n";
$generatedCode .= "echo \"    $headerHTML\\n\"; // Display header HTML here\n";
$generatedCode .= "echo \"</body>\\n\";\n";
$generatedCode .= "echo \"</html>\\n\";\n";
$generatedCode .= "?>\n";

            break;
    
        default: // HTML
            $generatedCode .= "<!DOCTYPE html>\n";
            $generatedCode .= "<html lang='en'>\n";
            $generatedCode .= "<head>\n";
            $generatedCode .= "    <meta charset='UTF-8'>\n";
            $generatedCode .= "    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>\n"; // Include Font Awesome
            $generatedCode .= "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
            $generatedCode .= "    <title>Generated Header</title>\n";
            $generatedCode .= "    <style>\n";
            $generatedCode .= "        .header {\n";
            $generatedCode .= "            background: $color;\n";
            $generatedCode .= "            padding: 15px;\n";
            $generatedCode .= "            display: flex;\n";
            $generatedCode .= "            align-items: center;\n";
            $generatedCode .= "            min-height: {$minHeight}px;\n";
            $generatedCode .= "            max-height: {$maxHeight}px;\n";
            $generatedCode .= "        }\n";
            $generatedCode .= "        .header h2 {\n";
            $generatedCode .= "            flex: 1;\n";
            $generatedCode .= "            text-align: $titleAlign;\n";
            $generatedCode .= "            color: white;\n";
            $generatedCode .= "        }\n";
            $generatedCode .= "        .header nav a {\n";
            $generatedCode .= "            margin: 0 15px;\n";
            $generatedCode .= "            color: white;\n";
            $generatedCode .= "            font-weight: bold;\n";
            $generatedCode .= "            text-decoration: none;\n";
            $generatedCode .= "        }\n";
            $generatedCode .= "        .header button {\n";
            $generatedCode .= "            width: $buttonWidth;\n";
            $generatedCode .= "            height: $buttonHeight;\n";
            $generatedCode .= "            padding: 10px 20px;\n";
            $generatedCode .= "            background: linear-gradient(135deg, #007bff, #0056b3);\n";
            $generatedCode .= "            color: white;\n";
            $generatedCode .= "            border: none;\n";
            $generatedCode .= "            cursor: pointer;\n";
            $generatedCode .= "            font-size: 1.2em;\n";
            $generatedCode .= "            font-weight: 500;\n";
            $generatedCode .= "            border-radius: 8px;\n";
            $generatedCode .= "            transition: 0.3s ease-in-out;\n";
            $generatedCode .= "        }\n";
            $generatedCode .= "        .header button:hover {\n";
            $generatedCode .= "            background: linear-gradient(135deg, #0056b3, #003d82);\n";
            $generatedCode .= "        }\n";
            $generatedCode .= "    </style>\n";
            $generatedCode .= "</head>\n";
            $generatedCode .= "<body>\n";
            $generatedCode .= "    $headerHTML\n"; // Display header HTML here
            $generatedCode .= "</body>\n";
            $generatedCode .= "</html>";
            break;
    }

    // Display output
    echo "<h2>Generated Header Preview</h2>";
    echo $headerHTML;

     // Add code with copy icon
     echo "<div style='position: relative; display: flex; align-items: center; background-color:white; padding: 20px; border-radius: 8px;'>";
     echo "<textarea readonly style='width: 100%; height: 200px; padding: 10px; font-family: monospace; border: 1px solid #ccc; border-radius: 8px; background-color: #333; color: white;'>".htmlspecialchars($generatedCode)."</textarea>";
     echo "<button class='copy-btn' onclick='copyCode()' style='position: absolute; right: 36px; top: 20px; background:rgb(241, 0, 0); color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px;'><i class='fa fa-copy' style='font-size: 16px;'></i> Copy</button>";
     echo "</div>";
 }
 ?>
 
 <script>
 function copyCode() {
     var codeText = document.querySelector("textarea").value;
     navigator.clipboard.writeText(codeText).then(function() {
         alert('Code copied to clipboard!');
     }, function(err) {
         alert('Error copying code: ' + err);
     });
 }
 </script>
 
 <style>
 .copy-btn {
     background-color: #28a745;
     border-radius: 5px;
     padding: 5px 10px;
     color: white;
     font-size: 14px;
     cursor: pointer;
     display: flex;
     align-items: center;
     justify-content: center;
     margin-left: 10px;
    width: 100px;
 }
 
 .copy-btn:hover {
     background-color: #218838;
 }
 
 textarea {
     font-family: 'Courier New', Courier, monospace;
     padding: 15px;
     border: 1px solid #ccc;
     border-radius: 8px;
     font-size: 14px;
     color: white;
     background-color: #333;
     resize: none;
 }
 </style>
