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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Generator</title>
   
    <style>
        /* General Styles */

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f1f1;
            padding: 30px;
            margin: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #222;
            margin-bottom: 25px;
            font-weight: 600;
        }
        .header {
    background: <?php echo $color; ?>;
    padding: 15px;
    display: flex;
    justify-content: <?php echo (!empty($logoTag)) ? 'space-between' : $titleAlign; ?>;
    align-items: center;
    min-height: <?php echo $minHeight; ?>px;
    max-height: <?php echo $maxHeight; ?>px;
}

.logo {
    flex: 0 0 auto; /* Prevents resizing */
}

.title {
    flex: 1; /* Takes available space */
    text-align: <?php echo $titleAlign; ?>;
}

nav a {
    margin: 0 15px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
        form {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 0 auto;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        label {
            font-size: 1.1em;
            color: #444;
            margin-bottom: 8px;
            display: block;
            font-weight: 500;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            background-color: #fff;
            box-sizing: border-box;
            transition: 0.3s ease-in-out;
        }

        input:focus, select:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        button {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            cursor: pointer;
            border: none;
            font-size: 1.2em;
            font-weight: 600;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
        }

        button:hover {
            background: linear-gradient(135deg, #0056b3, #003d82);
        }

        /* Output Section */
        .output {
            margin-top: 30px;
        }

        textarea {
            width: 100%;
            height: 150px;
            border: 2px solid #555;
            padding: 12px;
            font-family: "Poppins", sans-serif;
            font-size: 1em;
            border-radius: 8px;
            background-color: #f9f9f9;
            resize: none;
        }
          /* Tutorial Section */
           /* Modern Tutorial Section */
        .tutorial {
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .tutorial:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
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
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s;
        }

        .tutorial ul li:hover {
            background: #007bff;
            color: white;
        }

        /* Modern Buttons */
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
<h1>Header Generator</h1>
  <!-- Tutorial Section -->
  <div class="tutorial">
        <h2>How to Use the Header Menu</h2>
        <ul>
            <li><i class="fas fa-check-circle"></i> Select the header title, logo, and menu options.</li>
            <li><i class="fas fa-check-circle"></i> Customize the header size, color, and alignment.</li>
            <li><i class="fas fa-check-circle"></i> Choose a programming language for code generation.</li>
            <li><i class="fas fa-check-circle"></i> Click "Generate Header" to see the output.</li>
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

<div class="container">
   <center> <h2>Header Generator</h2></center>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Title: </label>
        <input type="text" name="title" required>

        <label>Menu Items (comma separated): </label>
        <input type="text" name="menu" required>

        <label>Background Color: </label>
        <input type="color" name="color">

        <label>Title Alignment: </label>
        <select name="titleAlign">
            <option value="left">Left</option>
            <option value="center" selected>Center</option>
            <option value="right">Right</option>
        </select>

        <label>Min Header Height (px): </label>
        <input type="number" name="minHeight" value="50">

        <label>Max Header Height (px): </label>
        <input type="number" name="maxHeight" value="100">

        <label>Upload Logo: </label>
        <input type="file" name="logo">

        <label>Select Language: </label>
        <select name="language">
            <option value="html" selected>HTML</option>
            <option value="php">PHP</option>
        </select>
        <label>Icons:</label>
        <div class="icon-select">
        <select name="icon">
        <option value="#">NO SILECT</option>
    <option value="fa-phone">📞 Phone</option>
    <option value="fa-envelope">✉️ Email</option>
    <option value="fa-bell">🔔 Notification</option>
    <option value="fa-brands fa-facebook">📘 Facebook</option>
    <option value="fa-brands fa-twitter">🐦 Twitter</option>
    <option value="fa-search">🔍 Search Bar</option>
</select>

        </div>
        
        <label>Custom Button Text:</label>
        <input type="text" name="customButtonText" placeholder="Enter button text">

        <button type="submit">Generate Header</button>
    </form>
</div>
<?php
include "head.php";
?>
</body>
</html>
