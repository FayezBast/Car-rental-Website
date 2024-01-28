<?php
session_start();
if(isset($_POST['login']))
{
    
    $emailid=$_POST['email'];
    $pass=$_POST['pass'];
    
    $con=mysqli_connect('','root','','car');
    if($con==false)
    {
        echo "Error in connection";
    }
    else
    {
        $select="SELECT * FROM `customers` WHERE `emailid`='$emailid'  AND `password`='$pass'";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        if($row==1)
        {
            $data=mysqli_fetch_assoc($query);
            $_SESSION['name']=$data['name'];
            ?>
            <script>
                alert("You have successfully logged in");
                window.open('book.html','_self');
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Wrong Emailid and Password!! Try Again");
                window.open('index.html','_self');
            </script>
            <?php
        }
        
    }
}
?>

<div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST">
    <input type="text" name="user" placeholder="Username" required="">
    <input type="password" name="pass" placeholder="Password" required="">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="signup.php">Register</a> • <a href="recoverpassword.php">Forgot Password</a>
  </div>
</div>
