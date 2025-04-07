<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
    <style>
        .back-button, .feedback-button, .social-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    padding: 12px 25px;
    background: linear-gradient(135deg,rgb(9, 124, 255),rgb(17, 37, 255));
    color: white;
    font-size: 1.2em;
    font-weight: bold;
    text-decoration: none;
    border-radius: 30px;
    transition: all 0.3s;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border: none;
    cursor: pointer;
    margin-right: 23px;
}

.back-button:hover, .feedback-button:hover, .social-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.back-button i, .feedback-button i, .social-button i {
    margin-right: 8px;
}
        </style>


    <title>Multi-Language Table Generator</title>

</head>
 <!-- Buttons -->
 <a href="index1.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
    <a href="#" class="feedback-button"><i class="fas fa-comment"></i> Feedback</a>
    <a href="https://www.facebook.com" class="social-button"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://www.instagram.com" class="social-button"><i class="fab fa-instagram"></i> Instagram</a>
    <a href="https://github.com" class="social-button"></i> GitHub</a>
    <a href="https://www.linkedin.com" class="social-button"><i class="fab fa-linkedin"></i> LinkedIn</a>
    <a href="https://www.youtube.com" class="social-button"><i class="fab fa-youtube"></i> YouTube</a>


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
                    <option value="html">HTML</option>
                </select>

                <button type="submit">Generate Table</button>
            </form>
        </div>
        <?php
        include "tt.php";
        ?>

        <div class="right-panel">
            <h3>Generated Code and Table</h3>
            <div class="code-display">
                <h4>Generated Code:</h4>
                <pre id="codeDisplay"><?php echo isset($codeSnippet) ? $codeSnippet : ''; ?></pre>
                <button class="copy-button" onclick="copyToClipboard('codeDisplay')">Copy Code</button>
                <button class="copy-button" id="editButton" onclick="editCode('codeDisplay')">Edit</button>
            </div>

            <div class="generated-table-container" style="position: relative;">
                <h4>Generated Table:</h4>
                <div style="position: absolute; top: 33px; right: 23px; display: flex; align-items: center; gap: 10px;">
                    <!-- Pen Icon Button -->
                    <button type="button" class="pen-button1" onclick="makeTableEditable()">
                        <i class="fa fa-pen"></i>
                    </button>
                    <!-- Copy Icon Button -->
                    <button type="button" class="copy-button1" onclick="copyTableToClipboard()">
                        <i class="fa fa-copy"></i>
                    </button>
                    <!-- Save Icon Button -->
                   
                    </button>
                </div>

                <!-- Add ID to the container here for proper targeting -->
                <div id="tableContainer">
                    <?php echo isset($htmlTable) ? $htmlTable : ''; ?>
                </div>

                <script src="table-script.js"></script>
            </div>
        </div>
</body>

</html>