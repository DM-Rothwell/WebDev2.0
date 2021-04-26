<?php require "Templates/Header.php";
      require "data/data.php";
?>

<html>
<head>
    <link rel="icon" href="Images/Mists%20favicon-01.png">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/shop.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Shop</title>
  <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap');

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Dosis', sans-serif;
        }
        .navbar {
            display: flex;
            flex-wrap: wrap;
            position: relative;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            margin-bottom: 0rem;
        }

        .logo {
            position: relative;
            height: 70px;
            background-color: black;
            float: left;
            font-size: 1.5rem;
        }

        .logo img {
            position: inherit;
            float: left;

        }

        .navbar-links {
            height: 100%;
            padding-left: 4rem;
        }

        .navbar-links ul {
            display: flex;
            margin: 0;
            padding: 0;

        }

        .navbar-links li {
            list-style: none;
        }

        .navbar-links li a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 1rem;
            padding-left: 2rem;
            font-size: 26px;
            font-weight: 500;
        }

        .navbar-links li a:hover {
            color: #d6a85f;
            transition: 0.6s ease;
        }

        .toggle-button {
            position: absolute;
            top: 1.3rem;
            right: 2rem;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }

        .toggle-button .bar {
            height: 3px;
            width: 100%;
            background-color: white;
            border-radius: 10px;
        }


        .interactionsContainer {
            display: flex;
            right: 0;
            padding-left: 4rem;
        }

        .interactions a {
            color: grey;
            font-size: 18px;
            margin-top: .4rem;
            margin-right: 1rem;
        }

        .interactions button {
            background-color: #d6a85f;
            height: 35px;
            border-radius: 25px;
            font-weight: 600;
        }


        .smallInteractions {
            display: none;
        }

        /*Media Query for the navbar*/
        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .toggle-button {
                display: flex;
            }

            .navbar-links {
                display: none;
                width: 100%;
            }

            .navbar-links ul {
                width: 100%;
                flex-direction: column;
                margin-right: 7.5rem;
            }

            .navbar-links ul li {
                text-align: center;
            }

            .navbar-links ul li a {
                padding: 2rem 0rem;
            }

            .navbar-links.active {
                display: flex;
            }

            .interactionsContainer {
                display: none;
            }

            .smallInteractions {
                display: block;
                width: 100%;
                text-align: center;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .price {
            color: #d6a85f;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }

        .hotDealsOne{
             width: 100%;

        }

        .hotDealsOne h2{
            color: #d6a85f;
            text-align: center;
            left: 50%;
            font-size: 40px;
        }

        .hotDealsOne h3{
            text-align: center;
            font-size: 25px;
        }

        .hotDealsPicOne{
            display: flex;
            flex-wrap: wrap;
            padding-left: 20rem;
            padding-right: 20rem;

        }


    </style>-->
</head>
<body>

<div class="hotDealsOne">
    <h2>Our Products</h2>
        <h3>Here You Can See All Our Products We Have To Offer</h3>
    <div class="hotDealsPicOne">

        <div class="card">
            <img src="Images/erik-mclean-ByjIzFupcHo-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe1 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe1 -> getPrice(); ?></p>
            <p><?php echo $shoe1 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-mHUk4Se7peY-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe2 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe2 -> getPrice(); ?></p>
            <p><?php echo $shoe2 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-BrDBqpsbITE-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe3 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe3 -> getPrice(); ?></p>
            <p><?php echo $shoe3 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-TjbedCFPQdc-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe4 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe4 -> getPrice(); ?></p>
            <p><?php echo $shoe4 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-tRaq_7NaxHo-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe5 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe5 -> getPrice(); ?></p>
            <p><?php echo $shoe5 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/travis-essinger-iOv3CqiZLtE-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe6 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe6 -> getPrice(); ?></p>
            <p><?php echo $shoe6 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/leon-skibitzki-NMyuo1hoCAA-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe7 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe7 -> getPrice(); ?></p>
            <p><?php echo $shoe7 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="Images/raoul-croes-94KcLYsihLY-unsplash.jpg" style="width: 100%"></a>
            <h1><?php echo $shoe8 -> getName(); ?></h1>
            <p class="price"><?php echo $shoe8 -> getPrice(); ?></p>
            <p><?php echo $shoe8 -> getInfo(); ?> </p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>
</div>

</body>

</html>



<?php require "Templates/Footer.php"?>