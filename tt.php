

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tableData"])) {
    $tableData = $_POST["tableData"];
    file_put_contents("saved_table.html", $tableData);
    echo "Table Saved!";
}
?>
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
    $language = $_POST['language'];

    // HTML Table generation
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

    // Code generation for each language
    $codeSnippet = '';
    switch ($language) {
        case "html":
            $codeSnippet = htmlspecialchars($htmlTable);
            break;
        case "php":
            $phpCode = "<?php\n\$columns = $columns;\n\$rows = $rows;\n\$borderColor = '$borderColor';\n\$headerBgColor = '$headerBgColor';\n\$headerTextColor = '$headerTextColor';\n\$rowBgColor = '$rowBgColor';\n\$rowTextColor = '$rowTextColor';\n";
            $phpCode .= "echo '<!DOCTYPE html><html><head><style>table { border: 1px solid \$borderColor; width: 100%; border-collapse: collapse; }</style></head><body><table>';\n";
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
            $codeSnippet = htmlspecialchars($phpCode);
            break;
        // Other languages follow the same pattern
    }
}
?>