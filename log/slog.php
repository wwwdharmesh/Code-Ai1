<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../index.php"); // Redirect to login page
    exit();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <!-- Tutorial Section -->
     <div class="tutorial">
        <h2>How to Use the Login From</h2>
        <ul>
            <li><i class="fas fa-check-circle"></i> Select the from title, logo, size,and icon options.</li>
            <li><i class="fas fa-check-circle"></i> Customize the form size, color, and AddFeald.</li>
            <li><i class="fas fa-check-circle"></i> Choose FromCustomize.</li>
            <li><i class="fas fa-check-circle"></i> Click "Aplay Customize","generated login From" to see the output.</li>
            <li><i class="fas fa-check-circle"></i> Copy the generated code and integrate it into your website.</li>
        </ul>
    </div>

   <!-- Buttons -->
   <a href="theam/d1.php" class="social-button"><i class="fas fa-arrow-left"></i> Back</a>
    <a href="#" class="social-button"><i class="fas fa-comment"></i> Feedback</a>
    <a href="https://www.facebook.com" class="social-button"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://www.instagram.com" class="social-button"><i class="fab fa-instagram"></i> Instagram</a>
    <a href="https://github.com" class="social-button"><i class="fab fa-github"></i> GitHub</a>
    <a href="https://www.linkedin.com" class="social-button"><i class="fab fa-linkedin"></i> LinkedIn</a>
    <a href="https://www.youtube.com" class="social-button"><i class="fab fa-youtube"></i> YouTube</a>

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
<input type="text" id="form-width" placeholder="Enter Width (e.g., 50%, 500px)">

<label for="form-height">Form Height:</label>
<input type="text" id="form-height" placeholder="Enter Height (e.g., 400px, auto)">

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



<button onclick="copyCode()" style="
    position: absolute;
    top: 5px;
    right: 25px;
    background: #007bff;
    color: white;
    border: none;
    padding: 5px;
    border-radius: 3px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
    transition: background 0.3s, transform 0.2s;
    width: 32px;
    height: 32px;
">
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
       

        let backgroundStyle = uploadedImageURL 
            ? `background-image: url('${uploadedImageURL}'); background-size: cover; background-position: center;`
            : `background: ${bgColor};`;

            let formWidth = document.getElementById('form-width').value.trim() || '50%';
            let formHeight = document.getElementById('form-height').value.trim() || 'auto';

        let formHTML = `<div class="container" style="${backgroundStyle}; padding: 30px; width: ${formWidth}; height: ${formHeight};">
            <h3 style="text-align: ${document.getElementById('title-align').value}; color: ${document.getElementById('title-color').value};">${title}</h3>`;

        selectedFields.forEach(field => {
            formHTML += `<div class="field-container">
                <i class="fa ${field.icon}" style="color: ${iconColor};"></i>
                <input type="text" placeholder="${field.name.charAt(0).toUpperCase() + field.name.slice(1)}">
            </div>`;
        });

        if (showLogin) {
            formHTML += `<button>Login</button>`;
        }
        if (showRegister) {
            formHTML += `<button>Register</button>`;
        }

        formHTML += `</div>`;
        document.getElementById("preview").innerHTML = formHTML;

        let formCode = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0; padding: 20px; font-family: Arial, sans-serif; display: flex;
            align-items: center; justify-content: center; height: 100vh; background: #f3f3f3;
        .container {
            width: ${formWidth}; height: ${formHeight}; padding: 20px; border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            ${backgroundStyle} /* Background now in .container */
            color: white;align-items: center;
    justify-content: center;
    text-align: center;
        
        }
        h3 {
            text-align: ${document.getElementById('title-align').value};
            color: ${document.getElementById('title-color').value};
        }
        .field-container { display: flex; align-items: center; gap: 10px; }
        .field-container i { font-size: 18px; color: ${iconColor}; }
        input, button {
            width: 100%; padding: 10px; margin: 9px 0; border-radius: 5px;
            border: 1px solid #ccc; font-size: 16px;
        }
       button {
        justify-content: center;
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
    border: none;
    font-weight: bold;
    font-size: 14px;  /* Smaller font for a compact look */
    padding: 8px 16px;  /* Adjusted padding for better proportions */
    border-radius: 5px;  /* Slightly rounded corners */
    transition: 0.3s;
    cursor: pointer;
    width: 120px;  /* Adjust width */
    height: 40px;  /* Adjust height */
    text-align: center;
}

button:hover {
    background: linear-gradient(135deg, #0056b3, #003d80);
}

    </style>
</head>
<body>
    <div class="container">
        <h3>${title}</h3>`;

        selectedFields.forEach(field => {
            formCode += `<div class="field-container">
                <i class="fa ${field.icon}" style="color: ${iconColor};"></i>
                <input type="text" placeholder="${field.name.charAt(0).toUpperCase() + field.name.slice(1)}">
            </div>`;
        });

        if (showLogin) {
            formCode += `<button>Login</button>`;
        }
        if (showRegister) {
            formCode += `<button>Register</button>`;
        }

        formCode += `</div></body></html>`;

        document.getElementById("codeOutput").value = formCode;
    }

    function applyCustomizations() {
        generateForm();
    }
</script>
</body>
</html>
