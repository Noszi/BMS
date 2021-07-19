<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/table.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Web design companys">
    <meta name="keywords" content="HTML,CSS,PHP,MYSQL">
    <meta name="author" content="Noszkovity Daniel , Takacs Szabolcs">
    <meta name="robots" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>
<div class="subSection">
    <nav>
        <a href="admin1.php">Back To Home Page</a>
    </nav>
</div>
<div class="sect sectJobs">
    <div align="center">
    <form method="get" action="">
        <label>img</label><input type="file"  name="img"><br/>
        <label>jobs</label><input type="text" class="createt" name="jobs"><br/>
        <label>Desc</label><input type="text" class="createt" name="description"><br/>

        <input type="submit" class="addbtn" name="gomb" value="Add">
    </form>
    </div>
<?php
if(isset($_GET["img"]) and isset($_GET["jobs"]) and isset($_GET["description"]))
{
    $conn = mysqli_connect("localhost", "root", "", "admin") or die(mysqli_error($conn));

    $id = $_GET["id"];
    $img = $_GET["img"];
    $jobs = $_GET["jobs"];
    $description = $_GET["description"];

    $query = "INSERT INTO jobs VALUES ('','$img','$jobs','$description')";
    $res = mysqli_query($conn, $query);

header("Location:admin1.php");
exit();
}
?>
</div>
<div class="subSection1"></div>
</body>
</html>