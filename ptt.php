<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Getting values from POST request
    $columns = $_POST['columns'];
    $rows = $_POST['rows'];
    $headerBgColor = $_POST['headerBgColor'];
    $headerTextColor = $_POST['headerTextColor'];
    $rowBgColor = $_POST['rowBgColor'];
    $rowTextColor = $_POST['rowTextColor'];
    $borderColor = $_POST['borderColor'];

    // PHP Code generation for table rendering
    $phpCode = "<?php\n";
    $phpCode .= "\$columns = $columns;\n";
    $phpCode .= "\$rows = $rows;\n";
    $phpCode .= "\$borderColor = '$borderColor';\n";
    $phpCode .= "\$headerBgColor = '$headerBgColor';\n";
    $phpCode .= "\$headerTextColor = '$headerTextColor';\n";
    $phpCode .= "\$rowBgColor = '$rowBgColor';\n";
    $phpCode .= "\$rowTextColor = '$rowTextColor';\n";
    $phpCode .= "echo '<!DOCTYPE html><html><head><style>table { border: 2px solid \$borderColor; width: 100%; border-collapse: collapse; }</style></head><body><table>';\n";
    $phpCode .= "echo '<thead style=\"background-color: \$headerBgColor; color: \$headerTextColor;\"><tr>';\n";
    
    for ($i = 1; $i <= $columns; $i++) {
        $phpCode .= "echo '<th>Header $i</th>';\n";
    }
    
    $phpCode .= "echo '</tr></thead><tbody>';\n";
    
    for ($i = 1; $i <= $rows; $i++) {
        $phpCode .= "echo '<tr style=\"background-color: \$rowBgColor; color: \$rowTextColor;\">';\n";
        
        for ($j = 1; $j <= $columns; $j++) {
            $phpCode .= "echo '<td>Row \$i, Col \$j</td>';\n";
        }
        
        $phpCode .= "echo '</tr>';\n";
    }
    
    $phpCode .= "echo '</tbody></table></body></html>';\n";
    $phpCode .= "?>\n";
    
    // Display the generated PHP code
    echo "<pre>$phpCode</pre>";

    // Optionally save the table to a file if needed
    $htmlTable = "<!DOCTYPE html>\n<html>\n<head>\n<style>\n";
    $htmlTable .= "table { border: 2px solid $borderColor; width: 100%; border-collapse: collapse; }\n";
    $htmlTable .= "th, td { border: 2px solid $borderColor; padding: 10px; text-align: center; }\n";
    $htmlTable .= "</style>\n</head>\n<body>\n";
    $htmlTable .= "<table>\n";
    $htmlTable .= "<thead style='background-color: $headerBgColor; color: $headerTextColor;'>\n<tr>\n";
    for ($i = 1; $i <= $columns; $i++) {
        $htmlTable .= "<th>Header $i</th>\n";
    }
    $htmlTable .= "</tr>\n</thead>\n<tbody>\n";
    for ($i = 1; $i <= $rows; $i++) {
        $htmlTable .= "<tr style='background-color: $rowBgColor; color: $rowTextColor;'>\n";
        for ($j = 1; $j <= $columns; $j++) {
            $htmlTable .= "<td>Row $i, Col $j</td>\n";
        }
        $htmlTable .= "</tr>\n";
    }
    $htmlTable .= "</tbody>\n</table>\n</body>\n</html>";

    // Save the table to a file (optional)
    file_put_contents("saved_table.html", $htmlTable);
    echo "Table Saved!";
}
?>
