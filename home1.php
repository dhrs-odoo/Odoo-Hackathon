<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="img">
                <!-- <img src="assets/train.jpg" alt=""> -->
            </div>
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
                        <a href="authent_login.html">Get Started</a>
                        <a href="ourservices.php">Our Services</a>
                        <a href="contactus.php">Contact us</a>
                        <a href="aboutus.php">About us</a>
                    </div>
                </div>
            </div>
            
            <div class="content">
                <div class="content-start">
                    <div class="content-Div">
                        <div class="txtContainer">
                            <h1 id="content-title">"Elevate Your Journey"</h1>
                            <p id="content-desc">"Where Comfort Meets the Rails"</p>
                        </div>
                        <div class="left-Right">
                            <div class="left">
                                <img src="assets/train.png" id="contentImage" id="content-img"></img>
                            </div>

                            <div class="nav-separation"></div>

                            <div class="right">
                                <p id="right-content-desc">Rail Comfort revolutionizes train travel with personalized bed roll services, seamless reservations, and real-time inventory updates, ensuring a restful and comfortable journey for every passenger.</p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>    
       
            <div class="form-container">
                <div class="form-content">
                    <div class="txtContainer">
                        <h1 id="form-title">Check for seats here!</h1>
                        <p id="form-desc">NOTE: Enter valid details</p>
                    </div>

                    <div class="form">
                        <form action="pass-dashboard.php" onsubmit="return validateForm()">
                            <div class="input-container">
                                <input type="text"  placeholder="From">
                                <input type="text"  placeholder="To">
                                <input type="date"  placeholder="Date">
                                <div class="cbox">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms" style="color: black; display: flex;">I agree to the terms</label>
                                </div>
                                <button class="btn">Check</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>