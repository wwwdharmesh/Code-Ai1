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
    <title>Header Code Display - Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
   body {
    font-family: "Poppins", sans-serif;
    background-color: #121212; /* Dark theme */
    margin: 0;
    padding: 0;
    color: #ffffff;
}

h1 {
    text-align: center;
    font-size: 2rem;
    margin-top: 50px;
    color: #ffffff;
    font-weight: 600;
    text-shadow: 0 0 10px #007BFF, 0 0 20px #007BFF, 0 0 30px #0056b3; /* Neon Glow */
    animation: lightingEffect 1.5s infinite alternate ease-in-out; /* Smooth animation */
}

/* Keyframes for dynamic lighting */
@keyframes lightingEffect {
    0% {
        text-shadow: 0 0 10px #007BFF, 0 0 20px #007BFF, 0 0 30px #0056b3;
    }
    50% {
        text-shadow: 0 0 15px #00BFFF, 0 0 25px #00BFFF, 0 0 35px #007BFF;
    }
    100% {
        text-shadow: 0 0 10px #007BFF, 0 0 20px #007BFF, 0 0 30px #0056b3;
    }
}

/* Slider Container - Two Boxes per Row */
.slider {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two equal columns */
    gap: 20px;
    margin: 40px auto;
    padding: 20px;
    max-width: 1200px;
}

/* Box (Image Container) */
.slider-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    text-align: center;
    background: #1a1a1a; /* Dark background */
    border: 3px solid #007BFF; /* Border added */
    box-shadow: 0 5px 15px rgba(194, 116, 116, 0.1);
    transition: transform 0.6s ease-in-out, box-shadow 0.4s ease-in-out, filter 0.4s ease-in-out;
    width: 95%;
    height: 260px; /* Increased Box Height */
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Ensure Header Image is Fully Visible */
.slider-item img {
    width: 100%; /* Take full width */
    height: 100%; /* Take full height */
    object-fit: contain; /* Ensures full image is shown without cutting */
    border-radius: 12px;
    background-color: #000; /* Background to avoid white gaps */
}

/* Box hover effect: rotate and lighting effect */
.slider-item:hover {
    transform: rotate(15deg); /* Rotation on hover */
    box-shadow: 0 12px 24px rgba(255, 255, 255, 0.2);
    filter: brightness(1.5); /* Increase brightness for glowing effect */
}

/* Generate Button */
.generate-btn {
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 12px 26px;
    font-size: 1rem;
    background: linear-gradient(145deg, #0d6efd, #0040b3);
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 12px;
    opacity: 0;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2), -4px -4px 10px rgba(255, 255, 255, 0.3);
}

.slider-item:hover .generate-btn {
    opacity: 1;
}

.generate-btn:hover {
    background: linear-gradient(145deg, #0040b3, #0d6efd);
    box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.3), inset -2px -2px 5px rgba(255, 255, 255, 0.2);
    transform: translate(-50%, -50%) scale(0.95);
}

.generate-btn:active {
    transform: translate(-50%, -50%) scale(0.92);
    box-shadow: inset 4px 4px 8px rgba(0, 0, 0, 0.4), inset -4px -4px 8px rgba(255, 255, 255, 0.1);
}

/* Rating Stars */
.rating {
    display: flex;
    justify-content: center;
    gap: 5px;
    position: absolute;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.slider-item:hover .rating {
    opacity: 1;
}

.rating i {
    font-size: 1.5rem;
    color: #555; /* Subtle color */
    cursor: pointer;
    transition: color 0.2s ease;
}

.rating i.filled {
    color: #FFD700; /* Gold stars */
}

/* Responsive - Adjust for Small Screens */
@media (max-width: 768px) {
    .slider {
        grid-template-columns: 1fr; /* One column on small screens */
    }

    .slider-item {
        height: 250px; /* Adjust height for smaller screens */
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

    <h1>Select Header to View Code</h1>
    <!-- Tutorial Section -->
  <div class="tutorial">
        <h2>How to Use the Header Menu</h2>
        <ul>
            <li><i class="fas fa-check-circle"></i> Select the header.</li>
            <li><i class="fas fa-check-circle"></i> rating The Header.</li>
            <li><i class="fas fa-check-circle"></i> Enjoy to Header Code.</li>
            <li><i class="fas fa-check-circle"></i> Click "Generate Header" to see the Code.</li>
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
            <img src="imgs/1.png" alt="Header 1" onclick="showHeaderCode(1)">
            <button class="generate-btn" onclick="showHeaderCode(1)">Generate Header</button>
            <div class="rating" id="rating-1">
                <i class="fa fa-star" onclick="rateHeader(1, 1)"></i>
                <i class="fa fa-star" onclick="rateHeader(1, 2)"></i>
                <i class="fa fa-star" onclick="rateHeader(1, 3)"></i>
                <i class="fa fa-star" onclick="rateHeader(1, 4)"></i>
                <i class="fa fa-star" onclick="rateHeader(1, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/2.png" alt="Header 2" onclick="showHeaderCode(2)">
            <button class="generate-btn" onclick="showHeaderCode(2)">Generate Header</button>
            <div class="rating" id="rating-2">
                <i class="fa fa-star" onclick="rateHeader(2, 1)"></i>
                <i class="fa fa-star" onclick="rateHeader(2, 2)"></i>
                <i class="fa fa-star" onclick="rateHeader(2, 3)"></i>
                <i class="fa fa-star" onclick="rateHeader(2, 4)"></i>
                <i class="fa fa-star" onclick="rateHeader(2, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/3.png" alt="Header 3" onclick="showHeaderCode(3)">
            <button class="generate-btn" onclick="showHeaderCode(3)">Generate Header</button>
            <div class="rating" id="rating-3">
                <i class="fa fa-star" onclick="rateHeader(3, 1)"></i>
                <i class="fa fa-star" onclick="rateHeader(3, 2)"></i>
                <i class="fa fa-star" onclick="rateHeader(3, 3)"></i>
                <i class="fa fa-star" onclick="rateHeader(3, 4)"></i>
                <i class="fa fa-star" onclick="rateHeader(3, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/4.png" alt="Header 4" onclick="showHeaderCode(4)">
            <button class="generate-btn" onclick="showHeaderCode(4)">Generate Header</button>
            <div class="rating" id="rating-4">
                <i class="fa fa-star" onclick="rateHeader(4, 1)"></i>
                <i class="fa fa-star" onclick="rateHeader(4, 2)"></i>
                <i class="fa fa-star" onclick="rateHeader(4, 3)"></i>
                <i class="fa fa-star" onclick="rateHeader(4, 4)"></i>
                <i class="fa fa-star" onclick="rateHeader(4, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/5.png" alt="Header 5" onclick="showHeaderCode(5)">
            <button class="generate-btn" onclick="showHeaderCode(5)">Generate Header</button>
            <div class="rating" id="rating-5">
                <i class="fa fa-star" onclick="rateHeader(5, 1)"></i>
                <i class="fa fa-star" onclick="rateHeader(5, 2)"></i>
                <i class="fa fa-star" onclick="rateHeader(5, 3)"></i>
                <i class="fa fa-star" onclick="rateHeader(5, 4)"></i>
                <i class="fa fa-star" onclick="rateHeader(5, 5)"></i>
            </div>
        </div>
        <div class="slider-item">
            <img src="imgs/6.png" alt="Header 6" onclick="showHeaderCode(6)">
            <button class="generate-btn" onclick="showHeaderCode(6)">Generate Header</button>
            <div class="rating" id="rating-6">
                <i class="fa fa-star" onclick="rateHeader(6, 3)"></i>
                <i class="fa fa-star" onclick="rateHeader(6, 1)"></i>
                <i class="fa fa-star" onclick="rateHeader(6, 4)"></i>
                <i class="fa fa-star" onclick="rateHeader(6, 2)"></i>
                <i class="fa fa-star" onclick="rateHeader(6, 5)"></i>
            </div>
        </div>
    </div>

    <script>
        
        function showHeaderCode(headerId) {
            window.location.href = 'code-display.php?headerId=' + headerId;
        }

        function rateHeader(headerId, rating) {
            var stars = document.querySelectorAll(`#rating-${headerId} i`);
            stars.forEach((star, index) => {
                star.classList.toggle('filled', index < rating);
            });
        }
        
        
    </script>
</body>
</html>
