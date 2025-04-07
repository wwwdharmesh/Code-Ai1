<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUtton Code Display</title>
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
        width: 350px;
        padding: 25px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-top: 40px;
    }

    pre {
        background-color: rgb(5, 5, 5);
        color: rgb(255, 255, 255);
        white-space: pre-wrap;
        word-wrap: break-word;
        font-family: 'Courier New', Courier, monospace;
        font-size: 14px;
        height: 400px;
        overflow-y: auto;
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

    .back-btn {
        background-color: #e74c3c;
    }

    .back-btn:hover {
        background-color: #c0392b;
    }
    </style>
</head>
<body>

    <h1 style="text-align: center; margin-top: 100px;">Button Code</h1>

    <div style="text-align: center; margin-top: 20px;">
        <button class="back-btn" onclick="goBack()"><i class="fas fa-arrow-left"></i> Back</button>
    </div>

    <div class="container" id="codeContainer">
        <div class="box">
            <h3>HTML</h3>
            <pre id="htmlCode" contenteditable="false">Select a Button to see the HTML code here...</pre>
            <button onclick="copyCode('htmlCode')"><i class="fas fa-copy"></i></button>
            <button class="edit-btn" onclick="editCode('htmlCode')"><i class="fas fa-edit"></i></button>
            <button class="save-btn" onclick="saveCode('htmlCode')"><i class="fas fa-save"></i></button>
        </div>
        <div class="box">
            <h3>CSS</h3>
            <pre id="cssCode" contenteditable="false">Select a Button to see the CSS code here...</pre>
            <button onclick="copyCode('cssCode')"><i class="fas fa-copy"></i></button>
            <button class="edit-btn" onclick="editCode('cssCode')"><i class="fas fa-edit"></i></button>
            <button class="save-btn" onclick="saveCode('cssCode')"><i class="fas fa-save"></i></button>
        </div>
        <div class="box">
            <h3>JavaScript</h3>
            <pre id="jsCode" contenteditable="false">Select a Button to see the JavaScript code here...</pre>
            <button onclick="copyCode('jsCode')"><i class="fas fa-copy"></i></button>
            <button class="edit-btn" onclick="editCode('jsCode')"><i class="fas fa-edit"></i></button>
            <button class="save-btn" onclick="saveCode('jsCode')"><i class="fas fa-save"></i></button>
        </div>
    </div>

    <script>
        function goBack() {
            window.location.href = 'slider.php';
        }

        const urlParams = new URLSearchParams(window.location.search);
        const buttonid = urlParams.get('buttonid');  // Changed from headerId to loginId

        fetch('btncode.php?buttonid=' + buttonid)  // Changed headerCode.php to loginCode.php
            .then(response => response.json())
            .then(data => {
                document.getElementById('htmlCode').textContent = data.html;
                document.getElementById('cssCode').textContent = data.css;
                document.getElementById('jsCode').textContent = data.js;
            });

        function copyCode(codeId) {
            var code = document.getElementById(codeId);
            var range = document.createRange();
            range.selectNode(code);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();

            alert('Code copied to clipboard!');
        }

        function editCode(codeId) {
            var preElement = document.getElementById(codeId);

            if (preElement.isContentEditable) {
                preElement.contentEditable = false;
            } else {
                preElement.contentEditable = true;
            }
        }

        function saveCode(codeId) {
            var preElement = document.getElementById(codeId);
            preElement.contentEditable = false;
            alert('Code saved!');
        }

        document.querySelectorAll('pre').forEach(function(codeBox) {
            codeBox.addEventListener('scroll', function() {
                console.log('Scrolled inside ' + codeBox.id);
            });
        });
    </script>

</body>
</html>
