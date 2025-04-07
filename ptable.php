<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
    <title>PHP Table Generator</title>
    <style>
        /* Centering table content */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center; /* Centers the text horizontally */
        }

        th, td {
            padding: 10px;
            border: 1px solid #dedede;
        }

        /* Optional: Adjust for vertical centering */
        td, th {
            vertical-align: middle; /* Centers text vertically */
        }

        /* Center content within the form inputs */
        input[type="number"], input[type="color"], select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-panel">
            <h3>Table Generator</h3>
            <form method="POST">
                <label for="columns">Columns:</label>
                <input type="number" id="columns" name="columns" placeholder="Number of columns" min="1" required>

                <label for="rows">Rows:</label>
                <input type="number" id="rows" name="rows" placeholder="Number of rows" min="1" required>

                <label for="headerBgColor">Header Background Color:</label>
                <input type="color" id="headerBgColor" name="headerBgColor" value="#eceff1">

                <label for="headerTextColor">Header Text Color:</label>
                <input type="color" id="headerTextColor" name="headerTextColor" value="#000000">

                <label for="rowBgColor">Row Background Color:</label>
                <input type="color" id="rowBgColor" name="rowBgColor" value="#ffffff">

                <label for="rowTextColor">Row Text Color:</label>
                <input type="color" id="rowTextColor" name="rowTextColor" value="#000000">

                <label for="borderColor">Border Color:</label>
                <input type="color" id="borderColor" name="borderColor" value="#dedede">

                <label for="language">Select Language:</label>
                <select id="language" name="language" required>
                    <option value="php">PHP</option>
                </select>

                <button type="submit">Generate Table</button>
            </form>
        </div>

        <div class="right-panel">
            <h3>Generated Code and Table</h3>
            <div class="code-display">
                <h4>Generated PHP Code:</h4>
                <pre id="codeDisplay">
                    <?php 
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Get form data
                        $columns = $_POST['columns'];
                        $rows = $_POST['rows'];
                        $headerBgColor = $_POST['headerBgColor'];
                        $headerTextColor = $_POST['headerTextColor'];
                        $rowBgColor = $_POST['rowBgColor'];
                        $rowTextColor = $_POST['rowTextColor'];
                        $borderColor = $_POST['borderColor'];
                        $language = $_POST['language']; // Get selected language

                        if ($language === 'php') {
                            // PHP Code Generation
                            $phpCode = "<?php\n";
                            $phpCode .= "\$columns = $columns;\n";
                            $phpCode .= "\$rows = $rows;\n";
                            $phpCode .= "\$borderColor = '$borderColor';\n";
                            $phpCode .= "\$headerBgColor = '$headerBgColor';\n";
                            $phpCode .= "\$headerTextColor = '$headerTextColor';\n";
                            $phpCode .= "\$rowBgColor = '$rowBgColor';\n";
                            $phpCode .= "\$rowTextColor = '$rowTextColor';\n";
                            $phpCode .= "echo '<!DOCTYPE html><html><head><style>table { border: 2px solid \$borderColor; width: 100%; border-collapse: collapse; text-align: center; }</style></head><body><table>';\n";
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

                            // Display the PHP code as text (with htmlspecialchars for escaping special chars)
                            echo htmlspecialchars($phpCode);
                        }
                    }
                    ?>
                </pre>
                <button class="copy-button" onclick="copyToClipboard('codeDisplay')">Copy Code</button>
            </div>

            <div class="generated-table-container">
                <h4>Generated Table:</h4>
                <div class="table-container">
                    <!-- Pen icon for enabling edit mode -->
                    <i class="fas fa-pen pen-icon" id="penIcon" onclick="enableEditing()"></i>

                    <div id="tableContainer">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            // Display the generated table
                            echo "<table id='editableTable' style='border: 2px solid $borderColor; width: 100%; border-collapse: collapse; text-align: center;'>";
                            echo "<thead style='background-color: $headerBgColor; color: $headerTextColor;'>";
                            echo "<tr>";
                            for ($i = 1; $i <= $columns; $i++) {
                                echo "<th>Header $i</th>";
                            }
                            echo "</tr></thead><tbody>";
                            for ($i = 1; $i <= $rows; $i++) {
                                echo "<tr style='background-color: $rowBgColor; color: $rowTextColor;'>";
                                for ($j = 1; $j <= $columns; $j++) {
                                    echo "<td contenteditable='true'>Row $i, Col $j</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Copy code to clipboard
        function copyToClipboard(elementId) {
            const code = document.getElementById(elementId);
            navigator.clipboard.writeText(code.textContent).then(function() {
                alert('Code copied to clipboard!');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }

        // Edit table cell on icon click
        function editCell(icon) {
            const cell = icon.parentElement;
            cell.contentEditable = true;
            cell.focus();
        }

        function enableEditing() {
            const table = document.getElementById("editableTable");

            if (table) {
                // Add the 'editable' class to the table to allow text editing
                table.classList.add("editable");

                // Change the pen icon to a stop icon (or any other icon you prefer) after clicking
                document.getElementById("penIcon").classList.remove("fa-pen");
                document.getElementById("penIcon").classList.add("fa-stop");
                document.getElementById("penIcon").setAttribute("onclick", "disableEditing()"); // Change click event
            }
        }

        // Disable editing when stop icon is clicked
        function disableEditing() {
            const table = document.getElementById("editableTable");

            if (table) {
                // Remove the 'editable' class to stop text editing
                table.classList.remove("editable");

                // Change the stop icon back to pen icon
                document.getElementById("penIcon").classList.remove("fa-stop");
                document.getElementById("penIcon").classList.add("fa-pen");
                document.getElementById("penIcon").setAttribute("onclick", "enableEditing()"); // Change click event back
            }
        }

        // Update the PHP code with the changes made to the table
        function updatePHPCode() {
            const table = document.getElementById("editableTable");
            const rows = table.getElementsByTagName("tr");
            let updatedCode = "<?php\n";
            let columns = rows[0].cells.length; // Assume the first row defines the number of columns
            let rowCount = rows.length - 1; // Subtract the header row

            updatedCode += "$columns = " + columns + ";\n";
            updatedCode += "$rows = " + rowCount + ";\n";
            updatedCode += "$borderColor = '#dedede';\n";
            updatedCode += "$headerBgColor = '#eceff1';\n";
            updatedCode += "$headerTextColor = '#000000';\n";
            updatedCode += "$rowBgColor = '#ffffff';\n";
            updatedCode += "$rowTextColor = '#000000';\n";
            updatedCode += "echo '<!DOCTYPE html><html><head><style>table { border: 2px solid \$borderColor; width: 100%; border-collapse: collapse; text-align: center; }</style></head><body><table>';\n";
            updatedCode += "echo '<thead style=\"background-color: \$headerBgColor; color: \$headerTextColor;\"><tr>';\n";
            
            // Loop to generate header rows
            for (let i = 0; i < columns; i++) {
                updatedCode += "echo '<th>Header " + (i + 1) + "</th>';\n";
            }
            
            updatedCode += "echo '</tr></thead><tbody>';\n";
            
            // Loop to generate table body rows
            for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
                updatedCode += "echo '<tr style=\"background-color: \$rowBgColor; color: \$rowTextColor;\">';\n";
                const cells = rows[i].cells;
                for (let j = 0; j < cells.length; j++) {
                    updatedCode += "echo '<td>" + cells[j].innerHTML + "</td>';\n";
                }
                updatedCode += "echo '</tr>';\n";
            }
            
            updatedCode += "echo '</tbody></table></body></html>';\n";
            updatedCode += "?>\n";

            // Display the updated PHP code in the codeDisplay element
            document.getElementById("codeDisplay").textContent = updatedCode;
        }

        // Listen for changes in table
        const table = document.getElementById("editableTable");
        table.addEventListener('input', updatePHPCode);
    </script>
</body>

</html>
        