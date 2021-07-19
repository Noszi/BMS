<?php
$host="localhost";
$user="root";
$password="";
$db="admin";
$connection=mysqli_connect($host,$user,$password);
$db=mysqli_select_db($connection,"admin");
if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * form loginform where user='$uname' AND Pass='$password' limit 1";

    $result=mysqli_query($connection,"SELECT * FROM loginform WHERE Pass='$password' AND User='$uname'");
    if(mysqli_num_rows($result)==1)
    {
        echo"You have logged in";
//        if you log in then you will be redirected to the admin panel
        header("Location:admin1.php");
        exit();
    }
    else
    {
        echo"Incorrect password";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Web design companys">
    <meta name="keywords" content="HTML,CSS,PHP,MYSQL">
    <meta name="author" content="Noszkovity Daniel , Takacs Szabolcs">
    <meta name="robots" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>
<nav>
    <a href="index.html">Back To Home Page</a>
</nav>
<div class="subSection"></div>
<div class="sect sectAdmin">
    <div class="bord">
    <form action="" method="post">
        <h3>Login</h3><br/><br/>
    <div class="form_input">
        <input type="text" name="username"  placeholder="Enter your username"/>
    </div><br/>
        <div class="form_input">
            <input type="password" name="password" placeholder="Enter your password"/>
        </div><br/><br/>
        <input type="submit" id="log" name="submit"  value="Login" class="btn-login"/>
    </form>
    </div>
</div>
<div class="subSection1"></div>
</body>
</html>