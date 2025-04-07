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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website Using HTML & CSS | Codehal</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <a href="../../index1.php" class="logo">Code Ai<-Back</a>

    </nav>
    <div class="bars-animation">
        <div class="bar"style="--i:6;"></div>
        <div class="bar"style="--i:5;"></div>
        <div class="bar"style="--i:4;"></div>
        <div class="bar"style="--i:3;"></div>
        <div class="bar"style="--i:2;"></div>
        <div class="bar"style="--i:1;"></div>
    </div>
    
    <section class="Home">
        <div class="home-info">
            <h1>Click Button</h1>
            <h2>GENERATOR,
                <span style="--i:5;"data-text="HEADER">HEADER</span>
                <span style="--i:4;"data-text="FOOTER">FOOTER</span>
                <span style="--i:3;"data-text="LOGIN">LOGIN</span>
                <span style="--i:2;"data-text="TABLE">TABLE</span>
                <span style="--i:1;"data-text="PDF">PDF</span>
            </h2>
            <p>click any button and showe digital page and select 
                your digain and click make your code and customized 
                your code
            </p>
            <div class="btn-sci">
                <a href="../button.php" class="btn">Simple -</a>
                
            </div>
            <div class="sci">
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>

        <div class="home-img">
            <div class="img-box">
                <div class="img-item">
                    <img src="3.png" alt="Profile Image">
                </div>
            </div>
        </div>
    </section>
</body>
</html>
