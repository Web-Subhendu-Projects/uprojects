<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ums";

    $conn = new mysqli($host, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {

        $_SESSION["email"] = $email;
        header("Location: index.php"); 
    } else {
       
        echo "Invalid email or password. Please try again.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>University Managment System</title>
      <link rel="icon" type="image" href="img/logosss.png">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/login-singup.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body> 

      <div class="wrapper">
       <div class="image">
        <img src="img/admin1.png">
        <div class="title-a">
            <div class="text-center"><span><a href="index.php">Home</a></span></div>
        </div>

        <div class="title-text">
            <div class="title login">
                Login Form
            </div>

            <div class="title signup">
                Signup Form
            </div>
        </div>

        <div class="form-container">   
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">SignUp</label>
                <div class="slider-tab"></div>
            </div>

            <div class="form-inner">
                <form action="#" class="login">
                    <div class="field">
                        <input type="text" name="email" placeholder="Enter Email Address" required>
                    </div>

                    <div class="field">
                        <input type="password" name="password" placeholder=" Your Email Password" required>
                    </div>

                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>

                    <div class="signup-link">
                        Not a Member? <a href="">SignUp now</a>
                    </div>
                </form>

                <form action="#" class="signup">
                    <div class="field">
                        <input type="text" name="email1" placeholder="Enter Email Address" required>
                    </div>

                    <div class="field">
                        <input type="password" name="password2" placeholder="Your Password" required>
                    </div>

                    <div class="field">
                        <input type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");

    signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });

    loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });

    signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
    });
</script>


   </body>
</html>
