    <?php
    session_start();
    ob_start(); // Start output buffering
    include 'login/connect.php'; // Ensure database connection is included

    // Redirect logged-out users to index.php
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Free HTML Code Generator</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="img/5.jpg" alt="Logo">
                <span>CODEAI</span>
            </div>
            <nav>
                <div class="links">
                <a href="#hero-section" id="about-link">About</a>
                <a href="#s-section" id="about-link">service</a>
                    <a href="#">Web Code</a>
                    <div class="dropdown">
                        <a href="#">Features</a>
                        <div class="dropdown-content">
                            <a href="./header/theam/d1.php">Header Generate</a>
                            <a href="./log/theam/d1.php">LoginF Generate</a>
                            <a href="./button/theam/d1.php">Button Generate</a>
                            <a href="table.php">TableF Generate</a>
                            <a href="#">PDF Generate</a>
                            <a href="./footer/theam/d1.php">Footer Generate</a>
                        
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <a href="#">Feedback</a>

                    <!-- Show "Login" if not logged in, "Logout" if logged in -->
                    <?php if (isset($_SESSION['email'])): ?>
                        <a href="login/logout.php">Logout</a>
                    <?php else: ?>
                        <a href="/bca-6/Login/main.php">Login</a>
                    <?php endif; ?>

                    <a href="/bca-6/ai/index.php" class="cta">Try Free AI</a>
                </div>
            </nav>
        </header>

        <div class="container">
            <h1>Free WEB Code Generator</h1>
            <p>Generate professional HTML code for your web projects easily.</p>
            <div class="input-box">
                <input type="text" placeholder="Describe your requirements...">
                <button onclick="handleButtonClick()">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    
    </section>
    <section id="hero-section" class="hero" style="margin-top: 250px; text-align: center; color: white; font-family: 'Poppins', sans-serif; background-color:rgba(0, 0, 0, 0.99); padding: 86px;">
        <img src="d.jpg" alt="Eliana Jade" class="profile-img" style="width: 120px; height: 120px; border-radius: 50%;">
        <h3>Hi! I'm Dharmesh Ahir <span>👋</span></h3>
        <h1 style="font-size: 40px; font-weight: 700;">Fullstack Web Developer<br> Based in Junagadh.</h1>
        <p style="font-size: 16px; max-width: 600px; margin: 10px auto;">
            I am a Fullstack developer from California, Junagadh with 3 years of experience in multiple companies like,.
        </p>
        <div class="buttons" style="margin-top: 90px;">
            <button class="contact-me" style="background: linear-gradient(to right, #a83279, #d38312); border: none; padding: 12px 24px; color: white; border-radius: 20px; cursor: pointer;">Contact Me →</button>
            <button class="resume" style="background: #e6e6e6; border: none; padding: 12px 24px; color: black; border-radius: 20px; cursor: pointer; margin-left: 10px;">My Resume</button>
        </div>

        
    </section>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
<section style="font-family: Arial, sans-serif; background: linear-gradient(black, black, black); padding: 100px 10%; border-radius: 10px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);">
    <div style="max-width: 1200px; margin: auto; display: flex; align-items: center; justify-content: center; gap: 40px; flex-wrap: wrap;">
        
        <!-- Profile Image -->
       
          
        
        <!-- About Text -->
        <div style="max-width: 600px;">
            <h1 style="font-size: 2.8em; font-weight: bold; color: white; margin-top:0px;">About Me</h1>
            <p style="font-size: 1.2em; color: #555; line-height: 1.6;">
               HELLO  I am Dharmesh Ahir an experienced Frontend&Backend Developer with over a decade of professional experience. 
                I have worked with prestigious organizations, contributing to their success.
			
            </p>
        </div>
    </div>

<!-- Info Cards -->
<div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 40px;">
    
    <!-- Card 1: Languages -->
    <div style="background:rgb(0, 0, 0); padding: 20px; border-radius: 12px; box-shadow: 0px 10px 20px rgb(0, 0, 0); width: 200px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.48); transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;"
        onmouseover="this.style.transform='translateY(-8px) rotate3d(1, 1, 0, 10deg)'; this.style.boxShadow='0px 15px 30px rgba(0, 0, 0, 0.2)'; this.style.backgroundColor='#45a049';"
        onmouseout="this.style.transform='none'; this.style.boxShadow='0px 10px 20px rgba(0, 0, 0, 0.1)'; this.style.backgroundColor='';">
        <span style="font-size: 2.5em; display: block; margin-bottom: 10px; color: #fff;">&#60;/&#62;</span>
        <h3 style="margin-bottom: 5px; color: #fff; font-size: 1.2em;">Languages</h3>
        <p style="font-size: 1em; color: #fff;">HTML, CSS, Python, ASP.NET, C++, C#, JavaScript, React.js, Next.js</p>
    </div>

    <!-- Card 2: Education -->
    <div style="background:rgb(0, 0, 0); padding: 20px; border-radius: 12px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0); width: 200px; text-align: center; backdrop-filter: blur(100px); border: 1px solid rgba(255, 255, 255, 0.3); transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;"
        onmouseover="this.style.transform='translateY(-8px) rotate3d(1, 1, 0, 10deg)'; this.style.boxShadow='0px 15px 30px rgba(0, 0, 0, 0.2)'; this.style.backgroundColor='#1976D2';"
        onmouseout="this.style.transform='none'; this.style.boxShadow='0px 10px 20px rgba(0, 0, 0, 0.1)'; this.style.backgroundColor=''">
        <span style="font-size: 2.5em; display: block; margin-bottom: 10px; color: #fff;">🎓</span>
        <h3 style="margin-bottom: 5px; color: #fff; font-size: 1.2em;">Education</h3>
        <p style="font-size: 1em; color: #fff;">B.C.A in Computer Science</p>
    </div>

    <!-- Card 3: Projects -->
    <div style="background:rgb(0, 0, 0); padding: 20px; border-radius: 12px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1); width: 200px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3); transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;"
        onmouseover="this.style.transform='translateY(-8px) rotate3d(1, 1, 0, 10deg)'; this.style.boxShadow='0px 15px 30px rgba(0, 0, 0, 0.2)'; this.style.backgroundColor='#F57C00';"
        onmouseout="this.style.transform='none'; this.style.boxShadow='0px 10px 20px rgba(0, 0, 0, 0.1)'; this.style.backgroundColor='';">
        <span style="font-size: 2.5em; display: block; margin-bottom: 10px; color: #fff;">💼</span>
        <h3 style="margin-bottom: 5px; color: #fff; font-size: 1.2em;">Projects</h3>
        <p style="font-size: 1em; color: #fff;">Built more than 5 projects</p>
    </div>


    <!-- newe part ok-->

<section id="s-section" class="hero">
<body style="background-color: black; color: white; font-family: Arial, sans-serif; text-align: center;">
    <h2 style="font-size: 28px;">Our Service</h2>
    <hr style="width: 10%; border: 2px solid green; margin: auto;">
    <div style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
        <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
            onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
            onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
            <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;">&#x270E;</div>
            <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgba(203, 190, 190, 0.48); z-index: 1;"></div>
            <h3 style="color: green;">Web <span style="color: white;">Design</span></h3>
            <p style="font-size: 12px;">Subscribe Enjoy Code YouTube channel to watch more videos on HTML, CSS, UI design, JavaScript, and Web Designing.</p>
        </div>
        <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
            onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
            onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
            <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;">&#x26A1;</div>
            <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(203, 190, 190, 0.48); z-index: 1;"></div>
            <h3 style="color: green;">Development</h3>
            <p style="font-size: 12px;">Subscribe Enjoy Code YouTube channel to watch more videos on HTML, CSS, UI design, JavaScript, and Web Designing.</p>
        </div>
        <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
            onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
            onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
            <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;">&#x1F4F1;</div>
            <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(203, 190, 190, 0.48); z-index: 1;"></div>
            <h3 style="color: green;">Social <span style="color: white;">Media</span></h3>
            <p style="font-size: 12px;">Subscribe Enjoy Code YouTube channel to watch more videos on HTML, CSS, UI design, JavaScript, and Web Designing.</p>
        </div>
        <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
            onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
            onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
            <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;">&#x1F3A5;</div>
            <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(203, 190, 190, 0.48); z-index: 1;"></div>
            <h3 style="color: green;">Video <span style="color: white;">Production</span></h3>
            <p style="font-size: 12px;">Subscribe Enjoy Code YouTube channel to watch more videos on HTML, CSS, UI design, JavaScript, and Web Designing.</p>
        </div>
    </div>
    <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
  <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
  onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
  onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
      <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;"><i class="fa-solid fa-file-code"></i></div>
      <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(); z-index: 1;"></div>
      <h3 style="color: green;">Html <span style="color: white;">code genretor</span></h3>
      <p style="font-size: 12px; opacity: 1; transition: opacity 0.3s;">Learn HTML and create amazing web pages with semantic structure and rich content.</p>
  </div>

  <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
  onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
  onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
      <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;"><i class="fa-solid fa-microchip"></i></div>
      <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(); z-index: 1;"></div>
      <h3 style="color: green;">HEADER <span style="color: white;">GENRETOR</span></h3>
      <p style="font-size: 12px; opacity: 1; transition: opacity 0.3s;">Master CSS to create beautiful layouts and styles for your web pages.</p>
  </div>

  <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
  onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
  onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
      <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;"><i class="fa-solid fa-file-invoice"></i></div>
      <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(); z-index: 1;"></div>
      <h3 style="color: green;">LOGIN <span style="color: white;">FROM GENRETOR</span></h3>
      <p style="font-size: 12px; opacity: 1; transition: opacity 0.3s;">Learn JavaScript to add interactivity, animations, and dynamic features to websites.</p>
  </div>

  <div style="width: 200px; padding: 20px; margin: 20px; text-align: center; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; border-radius: 10px;" 
  onmouseover="this.style.backgroundColor='green'; this.style.transform='scale(1.1)'; this.children[0].style.transform='scale(1.2)'" 
  onmouseout="this.style.backgroundColor='black'; this.style.transform='scale(1)'; this.children[0].style.transform='scale(1)'">
      <div style="font-size: 40px; transition: 0.3s; position: relative; z-index: 2;"><i class="fa-solid fa-diagram-project"></i></div>
      <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 60px; height: 60px; border-radius: 50%; background: rgb(); z-index: 1;"></div>
      <h3 style="color: green;">WEB <span style="color: white;">CODE</span></h3>
      <p style="font-size: 12px; opacity: 1; transition: opacity 0.3s;">Explore Python to automate tasks, build applications, and work with data science.</p>
  </div>
</div>
 </section>
</body>
</html>


        <div class="user-info">
            <?php
            if (isset($_SESSION['email'])) { // Check if user is logged in
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
    </html>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

footer {
    background-color: black;
    width: 100%; /* Make sure the footer spans the full screen width */
    padding: 30px 0; /* Adjusted for spacing around the footer */
}

footer .container {
    width: 100%; /* Ensure container spans full width */
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px; /* Padding on the sides */
}

.row {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap; /* Ensures content wraps on smaller screens */
    padding: 40px 0;
}

.footer-col {
    flex: 1;
    min-width: 300px; /* Ensures each column has a minimum width */
    margin: 0px;
}

.footer-col ul {
    list-style: none;
    padding-left: 0;
}

.footer-col h4 {
    color: white;
    margin-bottom: 25px;
    font-size: 22px;
    position: relative;
    font-family: 'Ubuntu', sans-serif;
}

.footer-col h4::before {
    content: '';
    width: 100px;
    height: 2px;
    position: absolute;
    background-color: #e91e64;
    bottom: -10px;
}

.footer-col ul li {
    padding: 10px 0;
}

.footer-col ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    opacity: 0.7;
    transition: 0.5s;
}

.footer-col ul li a:hover {
    opacity: 1;
}

.footer-col input {
    border: none;
    width: 250px;
    height: 45px;
    display: block;
    padding-left: 20px;
    margin: 14px 0;
}

.footer-col .inputSubmit {
    padding: 0px 20px;
    background-color: #e91e64;
    border: none;
    color: white;
    cursor: pointer;
}

.col p {
    color: white;
}

.row hr {
    opacity: 0.7;
    margin-top: 20px;
}

.row .socialIcons {
    display: flex;
    align-items: center;
    margin-top: 20px;
}

.row .socialIcons i {
    display: inline-block;
    color: white;
    font-size: 20px;
    margin: 0 15px;
    transition: 0.5s;
}

.row .socialIcons i:hover {
    color: #e91e64;
}

@media (max-width: 600px) {
    footer .row {
        flex-direction: column;
        padding: 20px 30px;
    }

    .footer-col ul {
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .footer-col input {
        width: 100%; /* Make the inputs full-width on mobile */
    }

    .footer-col .inputSubmit {
        width: 100%; /* Ensure submit button is full-width */
        padding: 0px 20px;

    }
}





        </style>
</head>
<body>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Menu</h4>
                    <ul>
                    
                    
                        <li><a href="#hero-section" id="about-link">About</a></li>
                        <li><a href="#s-section"id="about-link">service</a></li>
                        <li><a href="">Webcode</a></li>
                        <li><a href="">features</a></li>
                    </ul>
                </div>

                <!-- 2nd Column -->
                <div class="footer-col">
                    <h4>Properties</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact US</a></li>
                        <li><a href="">Team</a></li>
                       
                    </ul>
                </div>

                <!-- 3rd Column -->
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="">Header genret</a></li>
                        <li><a href="">Login form genret</a></li>
                        <li><a href="">Button Genret</a></li>
                        
                    </ul>
                </div>

                <!-- 3th Column -->

                <footer>
    <div class="footer-col">
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Your Name" class="inputName" required>
            <input type="email" name="email" placeholder="Enter Company Email" class="inputEmail" required>
            <input type="submit" value="Submit" class="inputSubmit">
        </form>
    </div>
</footer>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // ✅ ईमेल भेजना
    $to = "dharmesha@gmail.com.com"; // अपना ईमेल डालें
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // ✅ डेटा को डेटाबेस में सेव करना
    $conn = new mysqli("localhost", "root", "", "final"); // अपने डेटाबेस का नाम डालें

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contacts (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // ✅ Success Message
    echo "<script>alert('Form submitted successfully!'); window.location.href='index1.php';</script>";
}
?>

            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <p>&#169; 2025 Finegap. All Rights Reserved.</p>
                </div>
                <div class="socialIcons">
                <a href="https://www.facebook.com/maynk.borad" target="_blank">
    <i class="fa-brands fa-facebook"></i>
</a>

                    
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>


    <?php ob_end_flush(); // End output buffering ?>
