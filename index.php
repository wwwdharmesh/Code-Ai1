<?php
session_start();
ob_start(); // Start output buffering
include 'login/connect.php';
 // Ensure database connection is included
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free HTML Code Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/5.jpg" alt="Logo">
            <span>CODEAI</span>
        </div>
        <nav>
            <div class="links">
            <a href="#">Home</a>
            <a href="#hero-section" id="about-link">About</a>

                
            </div>
            <div class="actions">
                <a href="#">Feedback</a>

                <!-- Show "Login" if not logged in, "Logout" if logged in -->
                <?php if(isset($_SESSION['email'])): ?>
                    <a href="login/logout.php">Logout</a>
                <?php else: ?>
                    <a href="\bca-6\Login\main.php">Login</a>
                <?php endif; ?>

                <a href="\bca-6\ai\index.php" class="cta">Try Free AI</a>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>Login first after using generated code</h1>
        <p>Generate professional HTML code for your web projects easily.</p>

        </div>
     </div>
     
</section>
<section id="hero-section" class="hero" style="margin-top: 250px; text-align: center; color: white; font-family: 'Poppins', sans-serif; background-color:rgba(0, 0, 0, 0.99); padding: 10px;">
    <img src="d.jpg" alt="Eliana Jade" class="profile-img" style="width: 120px; height: 120px; border-radius: 50%;">
    <h3>Hi! I'm Dharmesh Ahir <span>👋</span></h3>
    <h1 style="font-size: 40px; font-weight: 700;">Fullstack Web Developer<br> Based in Junagadh.</h1>
    <p style="font-size: 16px; max-width: 600px; margin: 10px auto;">
        I am a frontend&Backend developer from California, Junagadh with 3 years of experience in multiple companies like,.
    </p>
    <div class="buttons" style="margin-top: 90px;">
        <button class="contact-me" style="background: linear-gradient(to right, #a83279, #d38312); border: none; padding: 12px 24px; color: white; border-radius: 20px; cursor: pointer;">Contact Me →</button>
        <button class="resume" style="background: #e6e6e6; border: none; padding: 12px 24px; color: black; border-radius: 20px; cursor: pointer; margin-left: 10px;">My Resume</button>
    </div>

    
</section>


    <div class="user-info">
        <?php 
        if(isset($_SESSION['email'])){ // Check if user is logged in
            $email = $_SESSION['email'];
            $query = $conn->prepare("SELECT first_name, last_name FROM users WHERE email = ?");
            $query->bind_param("s", $email);
            $query->execute();
            $result = $query->get_result();

            if ($row = $result->fetch_assoc()) {
                echo '<div style="position: absolute; left: 31px; top: 85px;">
            
                    <!-- Profile Icon -->
                    <i class="fa-solid fa-user-circle" 
                       onclick="toggleProfileInfo()" 
                       style="font-size: 25px; color:#a874f9; cursor: pointer;"></i>
            
                    <!-- Hidden Profile Info -->
                    <div id="profileInfo" style="
                        display: none;
                        position: absolute;
                        top: 50px;
                        left: 10px;
                        background: #fff;
                        padding: 15px;
                        border-radius: 10px;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                        font-size: 28px;
                        font-weight: bold;
                        width: 250px;
                        text-align: left;
                    ">
                        <p>Welcome, <span style="color:#9839f8;">' . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . '</span></p>
                        
                    </div>
                </div>';
            
                // JavaScript to Toggle Profile Info
                echo '<script>
                    function toggleProfileInfo() {
                        var profileInfo = document.getElementById("profileInfo");
                        profileInfo.style.display = (profileInfo.style.display === "block") ? "none" : "block";
                    }
                </script>';
            }
            
            
            
        }            
        ?>
    </div>

</body>
<script>
    document.getElementById("about-link").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        document.getElementById("hero-section").scrollIntoView({ behavior: "smooth" });
    });
</script>

</html>

<?php ob_end_flush(); // End output buffering ?>
