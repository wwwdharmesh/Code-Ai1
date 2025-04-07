<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Code Display</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 50px;
    }

    .box {
        width: 350px; /* Increased width for the box */
        padding: 25px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-top: 40px;
    }

    pre {
        background-color:rgb(5, 5, 5); /* Black background */
        color:rgb(255, 255, 255); /* Light text color like ChatGPT's default code style */
        white-space: pre-wrap;
        word-wrap: break-word;
        font-family: 'Courier New', Courier, monospace;
        font-size: 14px;
        height: 400px; /* Increased height for scroll */
        overflow-y: auto; /* Enable vertical scroll */
        border: 1px solid #ccc;
        padding: 10px;
        margin: 0;
    }

    button {
        padding: 10px 20px;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 5px;
        border: none;
        background-color: #4CAF50;
        color: white;
        font-size: 14px;
    }

    button:hover {
        background-color: #45a049;
    }

    .edit-btn {
        background-color: #f39c12;
    }

    .edit-btn:hover {
        background-color: #e67e22;
    }

    .save-btn {
        background-color: #2980b9;
    }

    .save-btn:hover {
        background-color: #3498db;
    }

    /* Back button style */
    .back-btn {
        background-color: #e74c3c;
    }

    .back-btn:hover {
        background-color: #c0392b;
    }
    </style>
</head>
<body>

    <h1 style="text-align: center; margin-top: 100px;">Footer Code</h1>

    <!-- Back Button -->
    <div style="text-align: center; margin-top: 20px;">
        <button class="back-btn" onclick="goBack()"><i class="fas fa-arrow-left"></i> Back</button>
    </div>

    <!-- Code Box Section -->
    <div class="container" id="codeContainer">
        <div class="box">
            <h3>HTML</h3>
            <pre id="htmlCode" contenteditable="false">Select a footer to see the HTML code here...</pre>
            <button onclick="copyCode('htmlCode')"><i class="fas fa-copy"></i></button>
            <button class="edit-btn" onclick="editCode('htmlCode')"><i class="fas fa-edit"></i></button>
            <button class="save-btn" onclick="saveCode('htmlCode')"><i class="fas fa-save"></i></button>
        </div>
        <div class="box">
            <h3>CSS</h3>
            <pre id="cssCode" contenteditable="false">Select a footer to see the CSS code here...</pre>
            <button onclick="copyCode('cssCode')"><i class="fas fa-copy"></i></button>
            <button class="edit-btn" onclick="editCode('cssCode')"><i class="fas fa-edit"></i></button>
            <button class="save-btn" onclick="saveCode('cssCode')"><i class="fas fa-save"></i></button>
        </div>
        <div class="box">
            <h3>JavaScript</h3>
            <pre id="jsCode" contenteditable="false">Select a footer to see the JavaScript code here...</pre>
            <button onclick="copyCode('jsCode')"><i class="fas fa-copy"></i></button>
            <button class="edit-btn" onclick="editCode('jsCode')"><i class="fas fa-edit"></i></button>
            <button class="save-btn" onclick="saveCode('jsCode')"><i class="fas fa-save"></i></button>
        </div>
    </div>

    <script>
        // Function to go back to the previous page (slider.php)
        function goBack() {
            window.location.href = 'slider.php';
        }

        // Fetch footer code based on the footerId passed in the URL
        const urlParams = new URLSearchParams(window.location.search);
        const footerId = urlParams.get('footerId');

        fetch('footerCode.php?footerId=' + footerId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('htmlCode').textContent = data.html;
                document.getElementById('cssCode').textContent = data.css;
                document.getElementById('jsCode').textContent = data.js;
            });

        // Function to copy code to clipboard, preserving the full structure with line breaks
        function copyCode(codeId) {
            var code = document.getElementById(codeId);
            var range = document.createRange();
            range.selectNode(code);
            window.getSelection().removeAllRanges(); // Clear any previous selection
            window.getSelection().addRange(range); // Select the content
            document.execCommand('copy'); // Copy the selection
            window.getSelection().removeAllRanges(); // Deselect the content

            alert('Code copied to clipboard!');
        }

        // Function to edit code
        function editCode(codeId) {
            var preElement = document.getElementById(codeId);

            // Toggle edit mode
            if (preElement.isContentEditable) {
                preElement.contentEditable = false;  // Disable editing
            } else {
                preElement.contentEditable = true;  // Enable editing
            }
        }

        // Function to save edited code
        function saveCode(codeId) {
            var preElement = document.getElementById(codeId);

            // Save the edited code and switch to view mode
            preElement.contentEditable = false;

            // Ideally, here you'd save the data to your server
            alert('Code saved!');
        }

        // Scroll event to trigger when user scrolls inside a code box
        document.querySelectorAll('pre').forEach(function(codeBox) {
            codeBox.addEventListener('scroll', function() {
                console.log('Scrolled inside ' + codeBox.id);
                // Additional functionality on scroll can be added here
            });
        });
    </script>

</body>
</html>
