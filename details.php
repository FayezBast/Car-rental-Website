<html>
    <head>
        <title>Checkout</title>
        <link rel="stylesheet" href="details.css">
    </head>
    <body>
        <h1 align="center" style="background-color:#ff7300; color:black">Thank You For using our services</h1>
        <h1><?php
        session_start();
            $date=date("Y-m-d");
            
            echo "Username: ".$_SESSION['username']."<br>";
            echo "Address:  ".$_SESSION['address']."<br>";
            echo "Starting date: " . $date . "<br>";
            echo "Price:    $ ".$_SESSION['days']*50;

                            
            
        ?>
        
        </h1>
        <h3 style:color:"red">Go to home page Click Here</h3>
        <a href="index.html">
        <button class="button button5">Clik Here</button>
</a>
    </body>
</html>