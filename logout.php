<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image-Pulse | HOME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navigation">
            <img class="logo" src="logo-main.jpg" alt="Logo">
            <ul class="navlist">
                    <li>HOME</li>
                <a href="#about">
                    <li>ABOUT</li>
                </a>
                <a href="#contact">
                    <li>CONTACT</li>
                </a>
            </ul>
            <a href="index.php"><button onclick="showLogout()" id="logout-auth-btn" type="button" class="login-btn">Logout</button></a>
        </nav>
    </header>

    <h2 id="userDisplay"></h2>

    <main>
        <p class="text-body">Image annotation and recognition platform</p>
        <?php

        include 'registration.php';
        include 'login.php';

        ?>
        <div class="form-container" id="formscontainer">
            <div class="close-btn" id="closebtn"><i onclick="closeForm()" class="fa-sharp fa-solid fa-xmark"></i></div>
            <div class="form-toggle">
                <button class="btn" id="signInButton">Log In</button>
                <button class="btn" id="signUpButton">Sign Up</button>
            </div>
            <form action="index.php" method="post">
                <div id="myDiv" class="form-section sign-in show">
                    <h2>Sign In</h2>
                    <div class="input-field">
                        <input id="email" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <input id="password" name="password" type="password" placeholder="Password" required>
                    </div>
                    <button onclick="hello()" class="btn" id="login" name="login" type="submit">Log In</button>
                </div>
            </form>
            <form action="index.php" method="post">
                <div class="form-section sign-up">
                    <h2>Sign Up</h2>
                    <div class="input-field">
                        <input id="username" name="username" type="text" placeholder="Name" required>
                    </div>
                    <div class="input-field">
                        <input id="signup_email" name="signup_email" type="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <input id="signup_password" name="signup_password" type="password" placeholder="Password" required>
                    </div>
                    <button class="btn" id="signUp" name="signup_submit" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <script type="module" src="user-validation.js"></script>
        <div class="image-container">
            <p class="upload-text">UPLOAD YOUR IMAGE HERE</p>
            <input type="file" id="real-file" onchange="imagePreview(event)" hidden>
            <button class="select-btn" id="custom-button">Choose Image</button>
            <span id="custom-text">No file choosen</span>
        </div>
        <div id="preview"></div>
        <div class="output-text">
            <p>RECOGNIZED IMAGE NAME</p>
            <input type="text">
        </div>


        <section id="about">
            <h2>ABOUT US</h2>
            <div class="line"></div>
            <p>Welcome to Image Pulse, where innovation meets visual intelligence. At Image Pulse, we are passionate
                about the limitless possibilities that image recognition technology unveils. As a pioneering force in
                the realm of visual data, we strive to revolutionize the way we interact with images. Our team of
                dedicated experts merges cutting-edge technologies to provide seamless and accurate image recognition
                solutions. Whether you're seeking to identify any objects, classify images, or extract valuable insights
                from visual data, Image Pulse is your go-to destination. We are committed to pushing the boundaries of
                what's possible, and individuals to unlock the true potential of their visual content. Join us on this
                exciting journey as we redefine the future of image recognition technology. </p>
        </section>


        <section id="contact">
            <h2>CONTACT US</h2>
            <div class="line"></div>
            <div class="container">
                <form action="MAILTO:devnirala900@gmail.com" method="post" enctype="text/plain">
                    <label for="name">Name:</label>
                    <input type="text" id="nameContact" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="emailContact" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Send</button>
                </form>

                <div class="image-contact">
                    <img src="contact.jpg" alt="Error">
                </div>
            </div>
        </section>
    </main>


    <footer>
        <div class="copyright">
            <p>Copyright &copy; | 2024 - Dev Nirala</p>
        </div>
    </footer>

    <script src="select-image.js"></script>
    <script src="login.js"></script>

</body>

</html>