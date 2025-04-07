<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        input, select, button {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        button {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        button:hover {
            background: linear-gradient(135deg, #0056b3, #003d80);
            transform: scale(1.05);
        }
        .field-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 5px 0;
        }
        #imageMessage {
            color: green;
            font-weight: bold;
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login Form Generator</h2>
    <input type="text" id="formTitle" placeholder="Enter Form Title">
    <input type="color" id="bgColor" value="#ffffff" title="Select Background Color">
    <input type="file" id="bgImageUpload" accept="image/*">
    <p id="imageMessage">Image Added</p>

    <label for="iconColor">Select Icon Color:</label>
    <input type="color" id="iconColor" value="#007bff">

    <select id="fields">
        <option value="firstname" data-icon="fa-user">First Name</option>
        <option value="username" data-icon="fa-user">Username</option>
        <option value="lastname" data-icon="fa-user">Last Name</option>
        <option value="password" data-icon="fa-lock">Password</option>
        <option value="gender" data-icon="fa-venus-mars">Gender</option>
        <option value="address" data-icon="fa-map-marker-alt">Address</option>
        <option value="email" data-icon="fa-envelope">Email</option>
        <option value="city" data-icon="fa-city">City</option>
        <option value="mobile" data-icon="fa-phone">Mobile Number</option>
        <option value="pincode" data-icon="fa-map-pin">Pincode</option>
    </select>

    <button onclick="addField()">Add Field</button>

    <div class="form-settings">
        <h3>Form Customization</h3>
        <label for="title-align">Title Alignment:</label>
        <select id="title-align">
            <option value="left">Left</option>
            <option value="center" selected>Center</option>
            <option value="right">Right</option>
        </select>

        <label for="form-width">Form Width:</label>
        <input type="text" id="form-width" placeholder="Enter Width (e.g., 50%, 500px)" value="50%" />

        <label for="form-height">Form Height:</label>
        <input type="text" id="form-height" placeholder="Enter Height (e.g., 400px, auto)" value="auto" />

        <label for="title-color">Title Color:</label>
        <input type="color" id="title-color" value="#000000">

        <button type="button" onclick="applyCustomizations()">Apply Customizations</button>
    </div>
</div>

<div>
    <input type="checkbox" id="showLogin" checked>
    <label for="showLogin">Login Button</label>
    <input type="checkbox" id="showRegister" checked>
    <label for="showRegister">Register Button</label>
</div>

<label for="languageSelect">Select Language:</label>
<select id="languageSelect">
    <option value="html">HTML</option>
    <option value="php">PHP</option>
    <option value="python">Python</option>
</select>

<button onclick="generateForm()">Generate Login Form</button>

<div id="preview"></div>

<div>
    <h3>Generated Code</h3>
    <div style="position: relative; display: flex; align-items: center; justify-content: center;">
    <textarea id="codeOutput" rows="8" style="
        width: 100%;
        font-family: 'Courier New', monospace;
        font-size: 14px;
        padding: 100px;
        border-radius: 8px;
        border: 2px solid #007bff;
        background: #121212;
        color: #ffffff;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.25), inset -2px -2px 4px rgba(255, 255, 255, 0.05);
        resize: none;
        outline: none;
        transition: border 0.3s, box-shadow 0.3s;
    " readonly></textarea>

<button onclick="copyCode()" style="position: absolute; top: 5px; right: 25px; background: #007bff; color: white; border: none; padding: 5px; border-radius: 3px; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 12px; box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15); transition: background 0.3s, transform 0.2s; width: 32px; height: 32px;">
    <i class="fa fa-copy" style="font-size: 14px;"></i>
</button>
    </div>
</div>

<script>
    let selectedFields = [];
    let uploadedImageURL = '';

    document.getElementById("bgImageUpload").addEventListener("change", function(event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                uploadedImageURL = e.target.result;
                document.getElementById("imageMessage").style.display = "block"; 
            };
            reader.readAsDataURL(file);
        }
    });

    function addField() {
        let fieldSelect = document.getElementById("fields");
        let fieldName = fieldSelect.value;
        let iconClass = fieldSelect.options[fieldSelect.selectedIndex].getAttribute("data-icon");

        if (!selectedFields.some(f => f.name === fieldName)) {
            selectedFields.push({ name: fieldName, icon: iconClass });
        }
    }

    function copyCode() {
        let codeText = document.getElementById("codeOutput");
        codeText.select();
        document.execCommand("copy");

        let copyButton = event.target;
        copyButton.innerHTML = '<i class="fa fa-check"></i> Copied!';
        setTimeout(() => {
            copyButton.innerHTML = '<i class="fa fa-copy"></i> Copy';
        }, 1500);
    }

    function generateForm() {
        let title = document.getElementById("formTitle").value || "Login Form";
        let bgColor = document.getElementById("bgColor").value;
        let iconColor = document.getElementById("iconColor").value;
        let showLogin = document.getElementById("showLogin").checked;
        let showRegister = document.getElementById("showRegister").checked;
        let language = document.getElementById("languageSelect").value;

        let backgroundStyle = uploadedImageURL 
            ? `background-image: url('${uploadedImageURL}'); background-size: cover; background-position: center;`
            : `background: ${bgColor};`;

        let formWidth = document.getElementById('form-width').value || '50%';
        let formHeight = document.getElementById('form-height').value || 'auto';

        // Start PHP code generation
        let formPHPCode = `<?php
        echo '<div class="container" style="' . '${backgroundStyle}' . '; padding: 30px; width: ' . '${formWidth}' . '; height: ' . '${formHeight}' . ';">';
        echo "<title>" . '${title}' . "</title>";
        `;

        // Loop through selected fields to generate dynamic PHP code
        selectedFields.forEach(field => {
            formPHPCode += `
            echo '<div class="field-container">';  // ✅ CORRECT
            <i class="fa ' . '${field.icon}' . '" style="color: ${iconColor};"></i>
            <input type="text" placeholder="' . ucfirst('${field.name}') . '">
        </div>';
            `;
        });

        // Add buttons (Login and Register) if selected
        if (showLogin) {
            formPHPCode += `echo '<button>Login</button>';`;
        }
        if (showRegister) {
            formPHPCode += `echo '<button>Register</button>';`;
        }

        // Closing div tag
        formPHPCode += `echo '</div>';`;

        // Close PHP tag
        formPHPCode += `?>`;

        // Output generated PHP code to the textarea
        document.getElementById("codeOutput").value = formPHPCode;
    }

    function applyCustomizations() {
        generateForm();
    }
</script>

</body>
</html>
