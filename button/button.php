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
    <title>Professional Button Generator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Global reset */
        * {
            margin: 0px;
            padding: 0px;
            
        }

        /* Body with gradient background */
        body {
     font-family: 'Poppins', sans-serif;
    height:200vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(-45deg, #ff9a9e, #fad0c4, #fad0c4, #ffdde1);
    background-size: 400% 400%;
    animation: gradientMove 10s ease infinite;
    overflow-y: auto; /* Allows scrolling */
}
        

        /* Main container (card) */
        .container {
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            max-width: 900px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* Input styling */
        input[type="text"] {
            width: 100%;
            padding: 15px;
            font-size: 1rem;
            border-radius: 10px;
            border: 2px solid #3498db;
            outline: none;
            background-color: #f1f1f1;
            margin-bottom: 30px;
            transition: all 0.3s ease-in-out;
        }

        input[type="text"]:focus {
            background-color: #fff;
            border-color: #2980b9;
            box-shadow: 0 0 8px rgba(41, 128, 185, 0.5);
        }

        /* Button row layout */
        .button-row {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        /* Base button styles */
        button {
            padding: 15px 35px;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            outline: none;
            margin: 5px;
        }

        /* Button 1 - Gradient Hover Effect */
        .button-1 {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: white;
        }

        .button-1:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(255, 126, 95, 0.4);
        }

        /* Button 2 - Neon Glow */
        .button-2 {
            background-color: #1abc9c;
            color: white;
            border: 2px solid #1abc9c;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
        }

        .button-2::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-color: rgba(26, 188, 156, 0.2);
            filter: blur(15px);
            z-index: -1;
            transition: all 0.3s ease;
        }

        .button-2:hover::before {
            top: 0;
            left: 0;
        }

        .button-2:hover {
            color: #1abc9c;
            transform: scale(1.1);
        }

        /* Button 3 - Shadow Expansion */
        .button-3 {
            background-color: #9b59b6;
            color: white;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(155, 89, 182, 0.3);
        }

        .button-3:hover {
            background-color: #8e44ad;
            box-shadow: 0 8px 25px rgba(155, 89, 182, 0.5);
            transform: scale(1.05);
        }

        /* Button 4 - Hover Transform */
        .button-4 {
            background-color: #f39c12;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            font-weight: bold;
        }

        .button-4:hover {
            background-color: #e67e22;
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 10px 30px rgba(243, 156, 18, 0.4);
        }

        /* Button 5 - 3D Hover Effect */
        .button-5 {
            background-color: #3498db;
            color: white;
            padding: 12px 32px;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
        }

        .button-5:hover {
            background-color: #2980b9;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.5);
        }

        /* Button 6 - Pulse Animation */
        .button-6 {
            background-color: #e74c3c;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            font-weight: bold;
            position: relative;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Button 7 - Soft Glow on Hover */
        .button-7 {
            background-color: #f39c12;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.3);
        }

        .button-7:hover {
            background-color: #e67e22;
            box-shadow: 0 0 25px rgba(243, 156, 18, 0.6);
        }

        /* Button 8 - Animated Shadow Effect */
        .button-8 {
            background-color: #2ecc71;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .button-8::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: rgba(46, 204, 113, 0.4);
            border-radius: 50%;
            transition: all 0.3s ease;
            transform: translate(-50%, -50%) scale(0);
        }

        .button-8:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Button 9 - Wavy Effect */
        .button-9 {
            background-color: #8e44ad;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            font-weight: bold;
        }

        .button-9::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-color: rgba(142, 68, 173, 0.2);
            border-radius: 50%;
            z-index: -1;
            transition: all 0.3s ease;
        }

        .button-9:hover::before {
            top: 0;
            left: 0;
        }

        .button-9:hover {
            background-color: #9b59b6;
            transform: scale(1.05);
        }

        /* Button 10 - Bounce Effect */
        .button-10 {
            background-color: #34495e;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            position: relative;
            animation: bounce 0.8s ease-in-out infinite alternate;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-8px);
            }
        }

        /* Code output box */
        #code-output {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: left;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 0.95rem;
            color: #333;
            max-height: 300px;
            overflow-y: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .back-button, .feedback-button, .social-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            padding: 12px 25px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: none;
            cursor: pointer;
            margin-right: 10px;
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
  

    <div class="container">
        <h1>Professional Button Generator</h1>

   <!-- Buttons -->
   <a href="./theam/d1.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
    <a href="#" class="feedback-button"><i class="fas fa-comment"></i> Feedback</a>
    <a href="https://www.facebook.com" class="social-button"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://www.instagram.com" class="social-button"><i class="fab fa-instagram"></i> Instagram</a>
    <a href="https://github.com" class="social-button"><i class="fab fa-github"></i> GitHub</a><br><br>
  
        <label for="button-name">Enter Button Name:</label>
        <input type="text" id="button-name" placeholder="Enter custom button name">

        <div class="button-row">
            <button class="button-1" onclick="generateCode('button-1')">Gradient Hover</button>
            <button class="button-2" onclick="generateCode('button-2')">Neon Glow</button>
            <button class="button-3" onclick="generateCode('button-3')">Shadow Expansion</button>
            <button class="button-4" onclick="generateCode('button-4')">Hover Transform</button>
            <button class="button-5" onclick="generateCode('button-5')">3D Hover</button>
            <button class="button-6" onclick="generateCode('button-6')">Pulse</button>
            <button class="button-7" onclick="generateCode('button-7')">Soft Glow</button>
            <button class="button-8" onclick="generateCode('button-8')">Animated Shadow</button>
            <button class="button-9" onclick="generateCode('button-9')">Wavy Effect</button>
            <button class="button-10" onclick="generateCode('button-10')">Bounce</button>
        </div>

        <div id="code-output">
            <h3>Generated HTML and CSS Code:</h3>
            <pre><code id="full-code-output"></code></pre>
        </div>
    </div>

    <script>
    function generateCode(buttonStyle) {
        const buttonName = document.getElementById('button-name').value || 'Button';
        let htmlCode = '';

        if (buttonStyle === 'button-1') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-1 {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: white;
            padding: 15px 35px;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button-1:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(255, 126, 95, 0.4);
        }
    </style>
</head>
<body>
    <button class="button-1">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-2') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-2 {
            background-color: #1abc9c;
            color: white;
            border: 2px solid #1abc9c;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
        }

        .button-2::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-color: rgba(26, 188, 156, 0.2);
            filter: blur(15px);
            z-index: -1;
            transition: all 0.3s ease;
        }

        .button-2:hover::before {
            top: 0;
            left: 0;
        }

        .button-2:hover {
            color: #1abc9c;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <button class="button-2">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-3') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-3 {
            background-color: #9b59b6;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(155, 89, 182, 0.3);
        }

        .button-3:hover {
            background-color: #8e44ad;
            box-shadow: 0 8px 25px rgba(155, 89, 182, 0.5);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <button class="button-3">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-4') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-4 {
            background-color: #f39c12;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            font-weight: bold;
        }

        .button-4:hover {
            background-color: #e67e22;
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 10px 30px rgba(243, 156, 18, 0.4);
        }
    </style>
</head>
<body>
    <button class="button-4">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-5') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-5 {
            background-color: #3498db;
            color: white;
            padding: 12px 32px;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
        }

        .button-5:hover {
            background-color: #2980b9;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.5);
        }
    </style>
</head>
<body>
    <button class="button-5">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-6') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-6 {
            background-color: #e74c3c;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            font-weight: bold;
            position: relative;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <button class="button-6">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-7') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-7 {
            background-color: #f39c12;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.3);
        }

        .button-7:hover {
            background-color: #e67e22;
            box-shadow: 0 0 25px rgba(243, 156, 18, 0.6);
        }
    </style>
</head>
<body>
    <button class="button-7">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-8') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-8 {
            background-color: #2ecc71;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .button-8::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: rgba(46, 204, 113, 0.4);
            border-radius: 50%;
            transition: all 0.3s ease;
            transform: translate(-50%, -50%) scale(0);
        }

        .button-8:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }
    </style>
</head>
<body>
    <button class="button-8">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-9') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-9 {
            background-color: #8e44ad;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            font-weight: bold;
        }

        .button-9::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-color: rgba(142, 68, 173, 0.2);
            border-radius: 50%;
            z-index: -1;
            transition: all 0.3s ease;
        }

        .button-9:hover::before {
            top: 0;
            left: 0;
        }

        .button-9:hover {
            background-color: #9b59b6;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <button class="button-9">${buttonName}</button>
</body>
</html>
            `;
        }

        if (buttonStyle === 'button-10') {
            htmlCode = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        .button-10 {
            background-color: #34495e;
            color: white;
            padding: 15px 35px;
            border-radius: 8px;
            position: relative;
            animation: bounce 0.8s ease-in-out infinite alternate;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-8px);
            }
        }
    </style>
</head>
<body>
    <button class="button-10">${buttonName}</button>
</body>
</html>
            `;
        }

        document.getElementById('full-code-output').textContent = htmlCode;
    }
</script>


</body>
</html>
