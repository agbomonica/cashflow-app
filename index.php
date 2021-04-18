<?php 

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
        <div class="container flex">
            <h1 class="logo">CASHFLOW.</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="how_to_buy.php">How to Buy</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!--show case-->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Charity crypto platform</h1>
                <p>A platform dedicated to giving back to the community 
                    & reaching those in need of support. 
                </p>
                <a href="#" id="-token-target" data-custom-value="xYWuMRsTdiZlhiSvBnO" class="btn btn-outline" onclick = "displayToken()"> Token Address</a>
            </div>
                <div class="showcase-form card">
                    <h2>Send us a Message</h2>
                    
                </div>
        </div>
    </section>

    <!-- Stats-->
    <section class="stats">
        <div class="container">
            <h3 class="stats-heading text-center my-1">
                You donate, we give
            </h3>
            <div class="grid grid-3 text-center my-4">
                <div>
                    <i class="fas fa-server fa-3x"></i>
                    <h3>10,234,984</h3>
                    <p class="text-secondary">Donations</p>
                </div>

                <div>
                    <i class="fas fa-upload fa-3x"></i>
                    <h3>784</h3>
                    <p class="text-secondary">Community Members</p>
                </div>
                
                <div>
                    <i class="fas fa-project-diagram fa-3x"></i>
                    <h3>1,252,006</h3>
                    <p class="text-secondary">Projects</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Cloud -->
    <section class="cloud bg-primary my-2 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg">What we Represent</h2>
                <p class="lead my-1">Charity, Reliability, Sustainablity, Innovation, Drive for social impact and respect for everyone.</p>
                <a href="about.php" class="btn btn-dark">Read More</a>
            </div>
            <img src="images/cloud.png" alt="">
        </div>
    </section>

    <!-- Languages -->
    <section class="languages">
        <h2 class="md text-center my-2">Affiliated Crypto Platforms</h2>
        <div class="container flex">
            <div class="card">
                <h4>Trust Wallet</h4>
                <img src="images/logos/node.png" alt="">
            </div>
            <div class="card">
                <h4>Binance</h4>
                <img src="images/logos/php.png" alt="">
            </div>
            <div class="card">
                <h4>Meta Mask</h4>
                <img src="images/logos/python.png" alt="">
            </div>
            <div class="card">
                <h4>Pancake Swap</h4>
                <img src="images/logos/scala.png" alt="">
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
    <script>
        $("#target-token").click(function() {
        var value = $(this).data("custom-value");
    // do other stuff.
});
    </script>
</body>

</html>