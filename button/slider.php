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
    <title>Button Code Display - Slider</title>
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

    .slider {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
        padding: 10px;
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
                    -8px -8px 15px rgba(255, 255, 255, 0.9);
        transition: all 0.3s ease-in-out;
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
</style>

</head>
<body>

    <h1>Select Button to View Code</h1>
    <div class="slider">
        <div class="slider-item">
            <img src="imgs/login1.png" alt="Button 1" onclick="showButtonCode(1)">
            <button class="generate-btn" onclick="showButtonCode(1)">Generate Button</button>
            <div class="rating" id="rating-1">
                <i class="fa fa-star" onclick="rateButton(1, 1)"></i>
                <i class="fa fa-star" onclick="rateButton(1, 2)"></i>
                <i class="fa fa-star" onclick="rateButton(1, 3)"></i>
                <i class="fa fa-star" onclick="rateButton(1, 4)"></i>
                <i class="fa fa-star" onclick="rateButton(1, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/login2.png" alt="Button 2" onclick="showButtonCode(2)">
            <button class="generate-btn" onclick="showButtonCode(2)">Generate Button</button>
            <div class="rating" id="rating-2">
                <i class="fa fa-star" onclick="rateButton(2, 1)"></i>
                <i class="fa fa-star" onclick="rateButton(2, 2)"></i>
                <i class="fa fa-star" onclick="rateButton(2, 3)"></i>
                <i class="fa fa-star" onclick="rateButton(2, 4)"></i>
                <i class="fa fa-star" onclick="rateButton(2, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/login3.png" alt="Button 3" onclick="showButtonCode(3)">
            <button class="generate-btn" onclick="showButtonCode(3)">Generate Button</button>
            <div class="rating" id="rating-3">
                <i class="fa fa-star" onclick="rateButton(3, 1)"></i>
                <i class="fa fa-star" onclick="rateButton(3, 2)"></i>
                <i class="fa fa-star" onclick="rateButton(3, 3)"></i>
                <i class="fa fa-star" onclick="rateButton(3, 4)"></i>
                <i class="fa fa-star" onclick="rateButton(3, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/login4.png" alt="Button 4" onclick="showButtonCode(4)">
            <button class="generate-btn" onclick="showButtonCode(4)">Generate Button</button>
            <div class="rating" id="rating-4">
                <i class="fa fa-star" onclick="rateButton(4, rateButton1)"></i>
                <i class="fa fa-star" onclick="rateButton(4, 2)"></i>
                <i class="fa fa-star" onclick="rateButton(4, 3)"></i>
                <i class="fa fa-star" onclick="rateButton(4, 4)"></i>
                <i class="fa fa-star" onclick="rateButton(4, 5)"></i>
            </div>
        </div>

        <div class="slider-item">
            <img src="imgs/login5.png" alt="Button 5" onclick="showButtonCode(5)">
            <button class="generate-btn" onclick="showButtonCode(5)">Generate Button</button>
            <div class="rating" id="rating-5">
                <i class="fa fa-star" onclick="rateButton(5, 1)"></i>
                <i class="fa fa-star" onclick="rateButton(5, 2)"></i>
                <i class="fa fa-star" onclick="rateButton(5, 3)"></i>
                <i class="fa fa-star" onclick="rateButton(5, 4)"></i>
                <i class="fa fa-star" onclick="rateButton(5, 5)"></i>
            </div>
        </div>
    </div>

    <script>
        function showButtonCode(buttonid) {
            window.location.href = 'code-display.php?buttonid=' + buttonid;
        }

        function rateButton(buttonid, rating) {
            var stars = document.querySelectorAll(`#rating-${buttonid} i`);
            stars.forEach((star, index) => {
                star.classList.toggle('filled', index < rating);
            });
        }
    </script>
</body>
</html>
