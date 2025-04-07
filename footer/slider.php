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
    <title>Footer Code Display - Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-top: 50px;
            color: #333;
            font-weight: 600;
        }

        /* Slider Container */
        .slider {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two images per row */
            gap: 20px;
            margin: 40px auto;
            padding: 0 20px;
            max-width: 1200px; /* Maximum width */
        }

        /* Image Container */
        .slider-item {
            position: relative; /* To position the button inside each image */
            overflow: hidden; /* Hide any overflowing elements */
            border-radius: 10px;
            text-align: center; /* Center the stars and button */
        }

        /* Footer Images */
        .slider-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover Effect on Images */
        .slider-item img:hover {
            transform: scale(1.05); /* Subtle zoom effect */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
        }

        /* Button on hover */
        .slider-item:hover .generate-btn {
            opacity: 1; /* Show the button when hovering over the image */
        }

        /* Generate Footer Button */
        .generate-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center the button */
            padding: 10px 20px;
            background: linear-gradient(145deg, #007BFF, #0056b3); /* Gradient for a 3D feel */
            color: white;
            border: none;
            border-radius: 10px; /* Slightly rounded corners */
            opacity: 0; /* Hide the button initially */
            cursor: pointer;
            transition: all 0.3s ease; /* Smooth transition for all properties */
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2), -4px -4px 10px rgba(255, 255, 255, 0.3); /* 3D shadow */
        }

        /* Hover Effect: Button appears pressed */
        .generate-btn:hover {
            background: linear-gradient(145deg, #0056b3, #007BFF); /* Reverse gradient on hover */
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.3), inset -2px -2px 5px rgba(255, 255, 255, 0.2); /* Pressed effect */
            transform: translate(-50%, -50%) scale(0.98); /* Button shrinks a little when hovered */
        }

        /* Active effect: When the button is clicked, it feels more pressed */
        .generate-btn:active {
            transform: translate(-50%, -50%) scale(0.95); /* Even smaller scale on click */
            box-shadow: inset 4px 4px 8px rgba(0, 0, 0, 0.4), inset -4px -4px 8px rgba(255, 255, 255, 0.1); /* Stronger pressed effect */
        }

        /* Rating Stars */
        /* Rating Stars */
.rating {
    display: flex;
    justify-content: center;
    gap: 5px;
    position: absolute;
    top: 70%;  /* Center the stars vertically */
    left: 50%; /* Center the stars horizontally */
    transform: translate(-50%, -50%);
    z-index: 2; /* Ensure stars stay on top */
    opacity: 0;  /* Initially hide the stars */
    transition: opacity 0.3s ease; /* Smooth transition for opacity */
}

/* Show the stars on hover */
.slider-item:hover .rating {
    opacity: 1; /* Make the stars visible when hovering over the image */
}

.rating i {
    font-size: 1.5rem;
    color: #d3d3d3; /* Light grey for empty stars */
    cursor: pointer;
    transition: color 0.2s ease;
}

.rating i.filled {
    color: #FFD700; /* Gold for filled stars */
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
            <li><i class="fas fa-check-circle"></i> Select the FOOTER , and click options.</li>
            <li><i class="fas fa-check-circle"></i> Customize the code.</li>
            <li><i class="fas fa-check-circle"></i> Choose a footer.</li>
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


    <h1>Select Footer to View Code</h1>

    <!-- Slider Section -->
    <div class="slider">
        <!-- Footer 1 Image -->
        <div class="slider-item">
            <img src="imgs/1.png" alt="Footer 1" onclick="showFooterCode(1)">
            <button class="generate-btn" onclick="showFooterCode(1)">Generate Footer</button>
            <!-- Rating -->
            <div class="rating" id="rating-1">
                <i class="fa fa-star" onclick="rateFooter(1, 1)"></i>
                <i class="fa fa-star" onclick="rateFooter(1, 2)"></i>
                <i class="fa fa-star" onclick="rateFooter(1, 3)"></i>
                <i class="fa fa-star" onclick="rateFooter(1, 4)"></i>
                <i class="fa fa-star" onclick="rateFooter(1, 5)"></i>
            </div>
        </div>

        <!-- Footer 2 Image -->
        <div class="slider-item">
            <img src="imgs/2.png" alt="Footer 2" onclick="showFooterCode(2)">
            <button class="generate-btn" onclick="showFooterCode(2)">Generate Footer</button>
            <!-- Rating -->
            <div class="rating" id="rating-2">
                <i class="fa fa-star" onclick="rateFooter(2, 1)"></i>
                <i class="fa fa-star" onclick="rateFooter(2, 2)"></i>
                <i class="fa fa-star" onclick="rateFooter(2, 3)"></i>
                <i class="fa fa-star" onclick="rateFooter(2, 4)"></i>
                <i class="fa fa-star" onclick="rateFooter(2, 5)"></i>
            </div>
        </div>

        <!-- Footer 3 Image -->
        <div class="slider-item">
            <img src="imgs/3.png" alt="Footer 3" onclick="showFooterCode(3)">
            <button class="generate-btn" onclick="showFooterCode(3)">Generate Footer</button>
            <!-- Rating -->
            <div class="rating" id="rating-3">
                <i class="fa fa-star" onclick="rateFooter(3, 1)"></i>
                <i class="fa fa-star" onclick="rateFooter(3, 2)"></i>
                <i class="fa fa-star" onclick="rateFooter(3, 3)"></i>
                <i class="fa fa-star" onclick="rateFooter(3, 4)"></i>
                <i class="fa fa-star" onclick="rateFooter(3, 5)"></i>
            </div>
        </div>

        <!-- Footer 4 Image -->
        <div class="slider-item">
            <img src="imgs/4.png" alt="Footer 4" onclick="showFooterCode(4)">
            <button class="generate-btn" onclick="showFooterCode(4)">Generate Footer</button>
            <!-- Rating -->
            <div class="rating" id="rating-4">
                <i class="fa fa-star" onclick="rateFooter(4, 1)"></i>
                <i class="fa fa-star" onclick="rateFooter(4, 2)"></i>
                <i class="fa fa-star" onclick="rateFooter(4, 3)"></i>
                <i class="fa fa-star" onclick="rateFooter(4, 4)"></i>
                <i class="fa fa-star" onclick="rateFooter(4, 5)"></i>
            </div>
        </div>

        <!-- Footer 5 Image -->
        <div class="slider-item">
            <img src="imgs/5.png" alt="Footer 5" onclick="showFooterCode(5)">
            <button class="generate-btn" onclick="showFooterCode(5)">Generate Footer</button>
            <!-- Rating -->
            <div class="rating" id="rating-5">
                <i class="fa fa-star" onclick="rateFooter(5, 1)"></i>
                <i class="fa fa-star" onclick="rateFooter(5, 2)"></i>
                <i class="fa fa-star" onclick="rateFooter(5, 3)"></i>
                <i class="fa fa-star" onclick="rateFooter(5, 4)"></i>
                <i class="fa fa-star" onclick="rateFooter(5, 5)"></i>
            </div>
        </div>

        <!-- Footer 6 Image -->
        <div class="slider-item">
            <img src="imgs/6.png" alt="Footer 6" onclick="showFooterCode(6)">
            <button class="generate-btn" onclick="showFooterCode(6)">Generate Footer</button>
            <!-- Rating -->
            <div class="rating" id="rating-6">
                <i class="fa fa-star" onclick="rateFooter(6, 1)"></i>
                <i class="fa fa-star" onclick="rateFooter(6, 2)"></i>
                <i class="fa fa-star" onclick="rateFooter(6, 3)"></i>
                <i class="fa fa-star" onclick="rateFooter(6, 4)"></i>
                <i class="fa fa-star" onclick="rateFooter(6, 5)"></i>
            </div>
        </div>

       

       

    <script>
        // Function to redirect to the code page when a footer image is clicked
        function showFooterCode(footerId) {
            // Redirect to the new page with the selected footer ID as a query parameter
            window.location.href = 'code-display.php?footerId=' + footerId;
        }

        // Function to handle star rating
        function rateFooter(footerId, rating) {
            var stars = document.querySelectorAll(`#rating-${footerId} i`);
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('filled'); // Add 'filled' class to highlight stars
                } else {
                    star.classList.remove('filled'); // Remove 'filled' class for empty stars
                }
            });
        }
    </script>

</body>
</html>
