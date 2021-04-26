<?php
    session_start();

    include 'data/config.php';
    include 'data/functions.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password)){
            $user_id = random_num(4);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($query);

            header("Location: index.php");
            die();
        } else {

        }
    }
?>




<html>
<head
<link rel="stylesheet" href="style/main.css">
<link rel="stylesheet" href="style/contact.css">
<link rel="stylesheet" href="style/footer.css">
<link rel="icon" href="Images/Mists%20favicon-01.png">

    <title>Create Account</title>
</head>



<body>
<div class="nPlain">
    <img src="Images/Mists-01.png" height="90px">
</div>

<div class ="loginDiv">
    <img src="Images/george-pagan-iii-PsifAN6_z-k-unsplash.jpg">
    <h1>Hello and Welcome to Mist</h1>
    <h3>Here you can create an account so you can login to access our shop!</h3>
</div>

<div class = "container">
    <form method="post">
        <h2>Create an Account</h2>

        <label>Username</label><br>
        <input type="text" name="user_name" placeholder="Username...">

        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password..." size="146"><br><br>

        <input type="submit" value="Sign Up">
        <br>

    </form>

    <a href="index.php"><button class="cAcc">Login</button></a>
</div><br><br>

</body>


<?php require "Templates/Footer.php"?>
</html>
