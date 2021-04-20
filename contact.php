<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cashflow</title>
</head>

<body>
    <!-- Nav bar-->
    <div class="navbar">
        <div class="container">
            <h1 class="logo">CASHFLOW.</h1>
            <div class="toggle"></div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="how_to_buy.php">How to Buy</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Contact Head -->
    <section class="contact-head py-3">
        <div class="container">
            <div>
                <h1 class="md">Contact Us</h1>
                <p>
                    Send us a message today. We will like to hear from you..
                </p>
            </div>
        </div>
    </section>
        
    <!-- Contact Main -->
    <section class="contact-main my-2">
        <div class="container flex">
            <div class="contact-form">
                <form name="contact" method="POST" netlify-honeypot="bot-field" data-netlify="true">
                    <input type="hidden" name="form-name" value="contact">
                    <p class="hidden">
                        <label>Don’t fill this out if you’re human: <input name="bot-field" /></label>
                    </p>
                            <div class="row">
                                <div class="input50">
                                    <input type="text" name="fname" id="fname" placeholder="First Name">
                                </div>
                                <div class="input50">
                                    <input type="text" name="lname" id="lname" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input50">
                                    <input type="text" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="input50">
                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input100">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input100">
                                    <input type="submit" name="submit" id="submit" value="Send">
                                </div>
                            </div>
                    </form>
            </div>

            <div class="contact-info">
                    <div class="info-box">
                        <img src="images/address.png" class="contact-icon" alt="contact address">
                        <div class="details">
                            <h4>Address</h4>
                            <p>5, Mohammed Bello Str. Sango Ota. Ogun State</p>
                        </div>
                    </div>

                    <div class="info-box">
                        <img src="images/email.png" class="contact-icon" alt="contact email">
                        <div class="details">
                            <h4>Email</h4>
                            <a href="mailto:agbomonica.am@gmail.com">cashflow.token@gmail.com</a>

                            <a href="mailto:agbomonica.am@gmail.com">cashflow.token@yahoo.com</a>

                        </div>
                    </div>

                    <div class="info-box">
                        <img src="images/call.png" class="contact-icon" alt="call">
                        <div class="details">
                            <h4>Call</h4>
                            <a href="tel:+2348050722709">+234 805 072 2709<br/></a>
                            <a href="tel:+2348050722709">+234 805 072 2709</a>
                        </div>
                    </div>
            </div>

        </div>
    </section>    

    <!-- Footer -->
    <footer class="footer bg-dark py-5">
        <div class="container grid grid-3">
            <div>
                <h1>Cashflow Token</h1>
                <p>Copyright &copy; 2021</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="social">
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>

</body>

</html>