<?php session_start();
      require "Templates/Header.php";
      require "data/data.php";
?>


<html>
<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">
    <title>Cart</title>
</head>

<body>
    <img src="Images/david-lezcano-Lv1di_d7tso-unsplash.jpg" width="100%" height="700px">

    <div class="hotDeals">
        <h2>Your Items Will Appear Here</h2>
    </div>

    <div class="card">
        <img src="Images/leon-skibitzki-BrDBqpsbITE-unsplash.jpg" style="width: 100%"></a>
        <h1><?php echo $shoe3 -> getName(); ?></h1>
        <p class="price"><?php echo $shoe3 -> getPrice(); ?></p>
        <p><?php echo $shoe3 -> getInfo(); ?> </p>
        <p><button>Add to Cart</button></p>
    </div>




    <div class="checkoutDiv">
     <a href="checkout.php"> <center><button class="cAcc">Checkout</button></center><br></a>
    </div>
</body>
<?php require "Templates/Footer.php"?>

</html>