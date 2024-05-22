<!DOCTYPE html>
<html>
    <head>
        <title>Cy Trip</title>
        <link rel="icon" href="/source/main.png">
        <link rel="stylesheet" type="text/css" href="/style/style.css">
        <link rel="stylesheet" type="text/css" href="/style/header_footer.css">
        <link rel="stylesheet" type="text/css" href="/style/login_signup.css">

        <script type="text/javascript" src="/script/header_footer.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once(__DIR__."/header.php") ?> 

        <main>
            <video autoplay loop muted id="bgvideo">
                <source src="../source/travel.mp4">
            </video>
            <div id="playpausebtn"><span>&#9658;</span></div>
            
            <div class="container" id="container">
                <div class="form-container sign-up">
                    <form action="login_signup.php" method="post"> <!-- Signup à rediriger pour check les supervariables dans post regex mail etc -->
                        <h1>Create Account</h1>
                        <span>use your email, username and password to register</span>
                        <input type="text" placeholder="Username" name="user_name" maxlength="19">
                        <input type="email" placeholder="Email" name="user_email">
                        <input type="password" placeholder="Password" name="user_password">
                        <button type="submit">Sign Up</button>
                    </form>
                </div>

                <div class="form-container sign-in">
                    <form action="login_signup.php" method="post"> <!-- Login -->
                        <h1>Log In</h1>
                        <span>use your email and password to connect</span>
                        <input type="email" placeholder="Email" name="user_email">
                        <input type="password" placeholder="Password" name="user_password">
                        <button type="submit">Log In</button>
                    </form>
                </div>

                <div class="toggle-container">
                    <div class="toggle">
                        <div class="toggle-panel toggle-left">
                            <h1>Hello, friend !</h1>
                            <p>Register with your personal details to use all of site features</p>
                            <button class="hidden" id="login">Log In</button>
                        </div>

                        <div class="toggle-panel toggle-right">
                            <h1>Welcome back !</h1>
                            <p>Enter your personal details to use all of site features</p>
                            <button class="hidden" id="register">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <script type="text/javascript" src="/script/login_signup.js"></script>
        <?php require_once(__DIR__."/footer.php") ?> 
    </body>
</html>
