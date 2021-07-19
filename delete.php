<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="css/style.css"/>
    <meta name="description" content="Web design companys">
    <meta name="keywords" content="HTML,CSS,PHP,MYSQL">
    <meta name="author" content="Noszkovity Daniel , Takacs Szabolcs">
    <meta name="robots" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>
<div class="subSection">
    <nav>
        <a href="admin1.php">Back To Admin Panel</a>
    </nav>
</div>
<div class="sect sectJobs">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "admin") or die(mysqli_error($conn));


    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $query = "DELETE FROM jobs WHERE ID='$id'";
        $res = mysqli_query($conn, $query);
    }
    header("Location:admin1.php");
    exit();


    ?>
</div>


<div class="subSection"></div>
</body>
</html>