<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<style>
        body {
            font-family: sans-serif;
            display: flex;
        }
        .left {
            background-color: #e0e0e0;
            width: 50%;
            padding: 30px;
        }
        .right {
            background-color: #1a396c;
            width: 50%;
            padding: 30px;
            color: white;
        }
        h1, h2 {
            color: #1a396c;
        }
        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .social-links a {
            margin: 0 10px;
            text-decoration: none;
            color: #1a396c;
        }
        .social-links i {
            font-size: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #1a396c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
</style>
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="img"></div>
            <div class="nav">
                <div class="nav-content">
                    <div class="nav-left">
                       <div class="logo">
                            <div class="logo-element">
                                <div class="logo-pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-train-freight-front-fill" viewBox="0 0 16 16">
                                        <path d="M5.736 0a1.5 1.5 0 0 0-.67.158L1.828 1.776A1.5 1.5 0 0 0 1 3.118v5.51l2-.6V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3.028l2 .6v-5.51a1.5 1.5 0 0 0-.83-1.342L10.936.158A1.5 1.5 0 0 0 10.264 0zM15 9.672l-5.503-1.65A.5.5 0 0 0 9.353 8H8.5v8h4a2.5 2.5 0 0 0 2.5-2.5zM7.5 16V8h-.853a.5.5 0 0 0-.144.021L1 9.672V13.5A2.5 2.5 0 0 0 3.5 16zm-1-14h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1M12 5v2.728l-2.216-.665A1.5 1.5 0 0 0 9.354 7H8.5V5zM7.5 5v2h-.853a1.5 1.5 0 0 0-.431.063L4 7.728V5zm-4 5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1m9 0a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1M5 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                                    </svg>  
                                </div>
                                <div>
                                    <p id="logo-title">RailComfort</p> 
                                    <p id="logo-desc">have a comfortable journey!</p>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="nav-right">
                        <a href="home.php">Home</a>
                        <a href="registration.php">Get Started</a>
                        <a href="ourservices.php" class="dropbtn">Our Services</a>
                        <a href="contactus.php">Contact us</a>
                        <a href="aboutus.php">About us</a>
                    </div>
                </div>
            </div>
            
            <div class="content">
                     <div class="left">
                            <h1>LOCATION</h1>
                            <p>28 Jackson Blvd Ste 1020 Chicago<br>IL 60604-2340</p>
                            <h2>FOLLOW US</h2>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                            <p>©2021 Privacy policy</p>
                        </div>
                        <div class="right">
                            <h1>contact form</h1>
                            <form>
                                <input type="text" placeholder="Enter your Name" required>
                                <input type="email" placeholder="Enter a valid email address" required>
                                <textarea placeholder="Enter your message" rows="5" required></textarea>
                                <button type="submit">SUBMIT</button>
                            </form>
                        </div> 
            </div>    
       
      
        </div>
    </div>
</body>
</html>