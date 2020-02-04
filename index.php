<html>
<head>
    <!-- Page Title -->
    <title>Luke's Website</title>

    <style>
    /* General Body CSS */
    body { font-family:arial; background:black; color:white; }
    /* Homepage Registration Form */
    #register { border:1px solid red; }
    #date { background:grey; width:150px; text-align:center; }
    </style>

    <!-- PHP Code -->

    <!-- END PHP Code -->
</head>

<body>

    <h1>Website Name</h1>
    
    <!-- Date -->
        <div id="date">
        <?php
        echo "Today's Date: " . date("d/m/20y") . "<br>";
        ?>
        </div>
    <!-- End of Date Test -->

    <!-- Registration Form -->
    <form id="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2>Register to access all the free content<br></h2>
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Last Name">
    <br><br>
    <input type="password" placeholder="Password">
    <input type="submit" value="Lets Go!">
    </form>
    <!-- End of Registration Form -->

</body>

<!-- Footer -->
<footer>
    <hr>
     Website created by <a href="https://www.twitter.com/lunotra_"><b>Lunotra</b></a>
</footer>
<!-- End of Footer -->
</html>