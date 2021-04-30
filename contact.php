<?php
    include('config/connection.php');
    global $msg;
    global $error;

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

    $sql = "INSERT INTO contact (fname, lname, email, subject, message) VALUES(:fname, :lname, :email, :subject, :message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':lname',$lname,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':subject',$subject,PDO::PARAM_STR);
    $query->bindParam(':message',$message,PDO::PARAM_STR);

    $query->execute();

    if ($query){
        $msg = "Message sent successfully";
    }else{
    $error = "Error in sending message";

    }

    }
?>


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
            <h1 class="logo">CASHFLOW QUADRANT.</h1>
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
            <?php if($msg){?>
                
            <div class="alert alert-success">
                    <p><?php echo $msg ?></p>

                    <?php 
                        }else if ($error){ ?>
                <div class="alert alert-error">

                    <?php  }

                    ?>
            </div>
        </div>
    </section>
        
    <!-- Contact Main -->
    <section class="contact-main my-2">
        <div class="container flex">
            <div class="contact-form">
                <form name="contact" method="POST">
                    <input type="hidden" name="form-name" value="contact">
                            <div class="row">
                                <div class="input50">
                                    <input type="text" name="fname" id="fname" placeholder="First Name" required>
                                </div>
                                <div class="input50">
                                    <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input50">
                                    <input type="text" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="input50">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input100">
                                    <textarea name="message" id="message" placeholder="Message" required></textarea>
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
                        <img src="images/email.png" class="contact-icon" alt="contact email">
                        <div class="details">
                            <h4>Email</h4>
                            <a href="mailto:agbomonica.am@gmail.com">cashflowQuadrant@gmail.com</a>

                            <a href="mailto:agbomonica.am@gmail.com">cashflowQuadrant@yahoo.com</a>

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
                <a href="https://t.me/CFQBSC"><i class="fab fa-telegram fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>

</body>

</html>