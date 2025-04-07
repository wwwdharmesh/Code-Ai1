<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../index.php"); // Redirect to login page
    exit();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Code Display - Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color:rgb(202, 138, 255);
        margin: 0;
        padding: 0;
        animation: fadeIn 1s ease-in-out;
    }

    h1 {
        text-align: center;
        font-size: 2rem;
        margin-top: 50px;
        color: #333;
        font-weight: 600;
        opacity: 0;
        animation: fadeIn 2s ease-in-out forwards;
    }

    .slider {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
        padding: 10px;
        opacity: 0;
        animation: fadeIn 2s ease-in-out 1s forwards;
    }

    .slider-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        text-align: center;
        width: 42%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, #d1d9e6, #ffffff);
        border: 5px solid #ccc;
        box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.15), 
                    -8px -8px 15px rgba(255, 255, 255, 0);
        transition: all 0.3s ease-in-out;
        opacity: 0;
        animation: slideIn 1s ease-in-out 0.5s forwards;
    }

    .slider-item:hover {
        border-color: rgb(0, 0, 0);
        box-shadow: inset 6px 6px 12px rgba(0, 0, 0, 0.2), 
                    inset -6px -6px 12px rgba(255, 255, 255, 0.5);
        transform: scale(0.98);
    }

    .slider-item img {
        width: 100%;
        height: 90%;
        object-fit: contain;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
    }

    .slider-item:hover .generate-btn {
        opacity: 1;
    }

    .generate-btn {
        position: absolute;
        top: 86%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 20px;
        background: linear-gradient(145deg, #007BFF, #0056b3);
        color: white;
        border: none;
        border-radius: 10px;
        opacity: 0;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2), -4px -4px 10px rgba(255, 255, 255, 0.3);
    }

    .generate-btn:hover {
        background: linear-gradient(145deg, #0056b3, #007BFF);
        box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.3), inset -2px -2px 5px rgba(255, 255, 255, 0.2);
        transform: translate(-50%, -50%) scale(0.98);
    }

    .rating {
        display: flex;
        justify-content: center;
        gap: 5px;
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .slider-item:hover .rating {
        opacity: 1;
    }

    .rating i {
        font-size: 1.5rem;
        color: #d3d3d3;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .rating i.filled {
        color: #FFD700;
    }

    /* Keyframe animations */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes slideIn {
        0% { opacity: 0; transform: translateY(50px); }
        100% { opacity: 1; transform: translateY(0); }
    }
     /* Modern & Professional Tutorial Section */
.tutorial {
    background: linear-gradient(135deg, #1a1a1a, #292929);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    margin-top: 35px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.tutorial:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}

.tutorial h2 {
    color: #16f370;
    margin-bottom: 12px;
    font-weight: 700;
    font-size: 1.8em;
    text-transform: uppercase;
    text-align: center;
}

/* Stylish List */
.tutorial ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tutorial ul li {
    margin-bottom: 12px;
    padding: 14px 20px;
    background: #222;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: background 0.3s ease, transform 0.3s ease, color 0.3s ease;
    font-size: 1.1em;
    font-weight: 500;
    color: #ddd;
}

.tutorial ul li:hover {
    background: #16f370;
    color: #111;
    transform: scale(1.05);
}

/* Modern Buttons */
.back-button, .feedback-button, .social-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-top: 40px;
    bottom: 20px;
    left: 20px;
    padding: 20px 25px;
    background: linear-gradient(135deg, #007bff, #003c8f);
    color: white;
    font-size: 1em;
    font-weight: bold;
    text-decoration: none;
    border-radius: 40px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 5px 12px rgb(255, 169, 249);
    border: none;
    cursor: pointer;
    margin-right: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
}

.back-button:hover, .feedback-button:hover, .social-button:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgb(201, 22, 255);
    background: linear-gradient(135deg,rgb(168, 98, 255),rgb(11, 117, 255));
}

.back-button i, .feedback-button i, .social-button i {
    margin-right: 8px;
    font-size: 1.2em;
}


</style>

</head>
<body>

    <h1>Select Login to View Code</h1>
       <!-- Tutorial Section -->
  <div class="tutorial">
        <h2>How to Use the Header Menu</h2>
        <ul>
            <li><i class="fas fa-check-circle"></i> Select the loginFrom.</li>
            <li><i class="fas fa-check-circle"></i> rating The loginfrom.</li>
            <li><i class="fas fa-check-circle"></i> Enjoy to from Code.</li>
            <li><i class="fas fa-check-circle"></i> Click "Generate from" to see the Code.</li>
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
    
    <div class="slider">
        <div class="slider-item">
            <img src="imgs/1.png" alt="Login 1" onclick="showLoginCode(1)">
            <button class="generate-btn" onclick="showLoginCode(1)">Generate Login</button>
            <div class="rating" id="rating-1">
                <i class="fa fa-star" onclick="rateLogin(1, 1)"></i>
                <i class="fa fa-star" onclick="rateLogin(1, 2)"></i>
                <i class="fa fa-star" onclick="rateLogin(1, 3)"></i>
                <i class="fa fa-star" onclick="rateLogin(1, 4)"></i>
                <i class="fa fa-star" onclick="rateLogin(1, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/2.png" alt="Login 2" onclick="showLoginCode(2)">
            <button class="generate-btn" onclick="showLoginCode(2)">Generate Login</button>
            <div class="rating" id="rating-2">
                <i class="fa fa-star" onclick="rateLogin(2, 1)"></i>
                <i class="fa fa-star" onclick="rateLogin(2, 2)"></i>
                <i class="fa fa-star" onclick="rateLogin(2, 3)"></i>
                <i class="fa fa-star" onclick="rateLogin(2, 4)"></i>
                <i class="fa fa-star" onclick="rateLogin(2, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/3.png" alt="Login 3" onclick="showLoginCode(3)">
            <button class="generate-btn" onclick="showLoginCode(3)">Generate Login</button>
            <div class="rating" id="rating-3">
                <i class="fa fa-star" onclick="rateLogin(3, 1)"></i>
                <i class="fa fa-star" onclick="rateLogin(3, 2)"></i>
                <i class="fa fa-star" onclick="rateLogin(3, 3)"></i>
                <i class="fa fa-star" onclick="rateLogin(3, 4)"></i>
                <i class="fa fa-star" onclick="rateLogin(3, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/4.png" alt="Login 4" onclick="showLoginCode(4)">
            <button class="generate-btn" onclick="showLoginCode(4)">Generate Login</button>
            <div class="rating" id="rating-4">
                <i class="fa fa-star" onclick="rateLogin(4, 1)"></i>
                <i class="fa fa-star" onclick="rateLogin(4, 2)"></i>
                <i class="fa fa-star" onclick="rateLogin(4, 3)"></i>
                <i class="fa fa-star" onclick="rateLogin(4, 4)"></i>
                <i class="fa fa-star" onclick="rateLogin(4, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/5.png" alt="Login 5" onclick="showLoginCode(5)">
            <button class="generate-btn" onclick="showLoginCode(5)">Generate Login</button>
            <div class="rating" id="rating-5">
                <i class="fa fa-star" onclick="rateLogin(5, 1)"></i>
                <i class="fa fa-star" onclick="rateLogin(5, 2)"></i>
                <i class="fa fa-star" onclick="rateLogin(5, 3)"></i>
                <i class="fa fa-star" onclick="rateLogin(5, 4)"></i>
                <i class="fa fa-star" onclick="rateLogin(5, 5)"></i>
            </div>
        </div>
        <div class="slider-item">
            <img src="imgs/6.png" alt="Login 6" onclick="showLoginCode(6)">
            <button class="generate-btn" onclick="showLoginCode(6)">Generate Login</button>
            <div class="rating" id="rating-6">
                <i class="fa fa-star" onclick="rateLogin(6, 1)"></i>
                <i class="fa fa-star" onclick="rateLogin(6, 2)"></i>
                <i class="fa fa-star" onclick="rateLogin(6, 3)"></i>
                <i class="fa fa-star" onclick="rateLogin(6, 4)"></i>
                <i class="fa fa-star" onclick="rateLogin(6, 5)"></i>
            </div>
        </div>
    </div>

    <script>
        function showLoginCode(loginId) {
            window.location.href = 'code-display.php?loginId=' + loginId;
        }

        function rateLogin(loginId, rating) {
            var stars = document.querySelectorAll(`#rating-${loginId} i`);
            stars.forEach((star, index) => {
                star.classList.toggle('filled', index < rating);
            });
        }
    </script>
</body>
</html>
