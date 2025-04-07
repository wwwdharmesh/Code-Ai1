<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../../index.php"); // Redirect to index.php
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        #footer-preview {
            position: relative;
            padding: 20px;
            margin-top: 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }
        .footer-icons {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 5px;
        }
        .footer-icons a {
            display: inline-block;
            width: 20px;
            height: 20px;
        }
        .footer-icons img {
            width: 100%;
            height: auto;
        }
        body {
    font-family: "Poppins", sans-serif;
    text-align: center;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f4;
}

h2, h3 {
    color: #333;
}

label {
    font-weight: 600;
    font-size: 16px;
    display: block;
    margin: 10px 0;
    color: #222;
}

input[type="text"], input[type="color"] {
    padding: 10px;
    width: 250px;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
    transition: border 0.3s ease;
}

input[type="text"]:focus {
    border: 2px solid #007bff;
}

button {
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

button:hover {
    background: linear-gradient(135deg, #0056b3, #003d80);
    transform: scale(1.05);
}

#footer-preview {
    margin-top: 20px;
    padding: 20px;
    border-radius: 10px;
    background: #333;
    color: white;
    text-align: center;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
}

textarea {
    width: 90%;
    height: 150px;
    border: 2px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    font-size: 14px;
    resize: none;
    transition: border 0.3s ease;
}

textarea:focus {
    border: 2px solid #007bff;
}

@media (max-width: 600px) {
    input[type="text"], input[type="color"] {
        width: 100%;
    }

    button {
        width: 100%;
    }

    textarea {
        width: 100%;
    }
}

        /* Modern Tutorial Section */
  .tutorial {
            background: linear-gradient(135deg,rgb(#121212),rgba(#121212));
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .tutorial:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(#121212);
        }

        .tutorial h2 {
            color: #007bff;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .tutorial ul {
            list-style-type: none;
            padding-left: 0;
        }

        .tutorial ul li {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(#121212);
            transition: background 0.3s;
        }

        .tutorial ul li:hover {
            background:rgba(22, 255, 104, 0.78);
            color: white;
        }

        /* Modern Buttons */
        .back-button, .feedback-button, .social-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            padding: 12px 25px;
            background: linear-gradient(135deg,rgba(81, 79, 79, 0.84), #0056b3);
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
</head>
<body>
       <!-- Tutorial Section -->
  <div class="tutorial">
        <h2>How to Use the Header Menu</h2>
        <ul>
            <li><i class="fas fa-check-circle"></i> Select the footer title.</li>
            <li><i class="fas fa-check-circle"></i> Customize the footer text.</li>
            <li><i class="fas fa-check-circle"></i> Choose back ground and text color.</li>
            <li><i class="fas fa-check-circle"></i> Click "Generate footer" to see the output.</li>
            <li><i class="fas fa-check-circle"></i> Copy the generated code and integrate it into your website.</li>
        </ul>
    </div>

   <!-- Buttons -->
   <a href="theam/d1.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
    <a href="#" class="feedback-button"><i class="fas fa-comment"></i> Feedback</a>
    <a href="https://www.facebook.com" class="social-button"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://www.instagram.com" class="social-button"><i class="fab fa-instagram"></i> Instagram</a>
    <a href="https://github.com" class="social-button"><i class="fab fa-github"></i> GitHub</a>
    <a href="https://www.linkedin.com" class="social-button"><i class="fab fa-linkedin"></i> LinkedIn</a>
    <a href="https://www.youtube.com" class="social-button"><i class="fab fa-youtube"></i> YouTube</a>


    <h2>Footer Generator</h2>
    <label>Footer Title: <input type="text" id="footer-title" placeholder="Enter Footer Title"></label>
    <br><br>
    <label>Footer Text: <input type="text" id="footer-text" value="&copy; 2025 Your Company"></label>
    <br><br>
    <label>Background Color: <input type="color" id="bg-color" value="#333"></label>
    <br><br>
    <label>Text Color: <input type="color" id="text-color" value="#ffffff"></label>
    <br><br>
    <button onclick="generateFooter()">Generate Footer</button>
    <br><br>
    <div id="footer-preview"></div>
    <h3>Generated Code:</h3>
    <textarea id="footer-code" rows="10" cols="50" readonly></textarea>
    <br><br>
    <button onclick="copyCode()">Copy Code</button>
    
    <script>
        function generateFooter() {
            let title = document.getElementById("footer-title").value;
            let text = document.getElementById("footer-text").value;
            let bgColor = document.getElementById("bg-color").value;
            let textColor = document.getElementById("text-color").value;
            
            let iconHTML = `
                <div class="footer-icons">
                    <a href="#" class='footer-icon'><img src="https://cdn-icons-png.flaticon.com/512/733/733609.png" alt="Facebook"></a>
                    <a href="#" class='footer-icon'><img src="https://cdn-icons-png.flaticon.com/512/733/733635.png" alt="Twitter"></a>
                    <a href="#" class='footer-icon'><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"></a>
                    <a href="#" class='footer-icon'><img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn"></a>
                    <a href="#" class='footer-icon'><img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" alt="WhatsApp"></a>
                </div>
            `;
            
            let footerHTML = `
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Generated Footer</title>
                <style>
                    footer {
                        position: relative;
                        padding: 20px;
                        background-color: ${bgColor};
                        color: ${textColor};
                        text-align: center;
                        margin-top:435px;
                    }
                    .footer-icons {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        display: flex;
                        gap: 5px;
                    }
                    .footer-icons a {
                        display: inline-block;
                        width: 20px;
                        height: 20px;
                    }
                    .footer-icons img {
                        width: 100%;
                        height: auto;
                    }
                </style>
            </head>
            <body>
                <footer>
                    ${iconHTML}
                    <h3>${title}</h3>
                    <p>${text}</p>
                </footer>
            </body>
            </html>`;
            
            document.getElementById("footer-preview").innerHTML = footerHTML;
            document.getElementById("footer-code").value = footerHTML;
        }
        
        function copyCode() {
            let copyText = document.getElementById("footer-code");
            copyText.select();
            document.execCommand("copy");
            alert("Code copied!");
        }
    </script>
</body>
</html>
