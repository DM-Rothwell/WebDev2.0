<?php require "Templates/Header.php"?>

<html>
<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">

    <title>Contact</title>
</head>

<body>
<div class="hotDeals">
    <h2>Let Us Know Whats on Your Mind</h2>
</div>
<div class="contact-form">
    <div class="container">
        <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder="Your email..">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit"><br>
        </form>
    </div>
</div>
<div id="map"></div>

<div class="mapStyle">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8004.549870319391!2d-6.360018997025701!3d53.383219843958955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sie!4v1617113875053!5m2!1sen!2sie"
        width="56%" height="450" style="border:0;" allowfullscreen="" loading="lazy" align="middle"></iframe>
</div>
</body>
<?php require "Templates/Footer.php"?>

</html>