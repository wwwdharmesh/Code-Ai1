<?php 
session_start();
include 'connect.php';

// Registration
if(isset($_POST['signUp'])){
    $first_name = $_POST['fName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if email exists
    $checkEmail = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($checkEmail);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "<script>alert('Email Already Exists Please Login!'); window.location.href = 'main.php';</script>";
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

        if($stmt->execute()){
            echo "<script>alert('Registration Successful!'); window.location.href = 'main.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "'); window.location.href = 'index.php';</script>";
        }
    }
}

// Login
if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['email'] = $row['email'];
            echo "<script>alert('Login Successful!'); window.location.href = '../index1.php';</script>";
        } else {
            echo "<script>alert('Incorrect Password! Try again.'); window.location.href = 'main.php';</script>";
        }
    } else {
        echo "<script>alert('Email Not Found! Please Sign Up.'); window.location.href = 'main.php';</script>";
    }
}
?>
