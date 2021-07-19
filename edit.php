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
        <a href="admin1.php">Back To Admin Panel</a>
    </nav>
</div>
<div class="sect sectJobs">
<?php
$conn = mysqli_connect("localhost", "root", "", "admin") or die(mysqli_error($conn));

$query = "SELECT * FROM jobs";
$res = mysqli_query($conn, $query);
//edit table in order to manage the jobs on your website
echo "<table class='tabel'>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Img</td>";
echo "<td>Jobs</td>";
echo "<td>Description</td>";
echo "<td></td>";
echo "</tr>";
while($result = mysqli_fetch_array($res)){
    $id = $result["ID"];
    $img = $result["img"];
    $jobs = $result["job"];
    $description = $result["description"];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$img</td>";
    echo "<td>$jobs</td>";
    echo "<td>$description</td>";
    echo "<td><form action='' method='get'><button value='$id' name='submit' type='submit'>edit</button></form></td>";
    echo "</tr>";
}
echo "</table>";

if(isset($_GET["submit"])){
    $id = $_GET["submit"];
    $query = "SELECT * FROM jobs WHERE id='$id'";
    $res = mysqli_query($conn, $query);

    $result = mysqli_fetch_array($res);

    $img = $result["img"];
    $jobs=$result["job"];
    $description = $result["description"];
    echo "<div align='center'>";
    echo "<form method='get' action=''><br/>";
    echo "<label>ID</label><input value='$id' type='text' class='createt' name='id' readonly><br/>";
    echo "<label>img</label><input value='$img' type='file' name='img'><br/>";
    echo "<label>Jobs</label><input value='$jobs' type='text' class='createt'name='jobs'><br/>";
    echo "<label>Desc</label><input value='$description' type='text' class='createt' name='description'><br/>";

     echo "<input type='submit' name='gomb' class='addbtn' value='Edit'>";
    echo "</form>";
    echo "</div>";
    /*
    echo "<img src='../Images/shop/$imagename'>"
    */
}

if(isset($_GET["id"]) and isset($_GET["img"]) and isset($_GET["jobs"])  and isset($_GET["description"])) {
    $id = $_GET["id"];
    $img = $_GET["img"];
    $jobs = $_GET["jobs"];
    $description = $_GET["description"];

    $query = "UPDATE jobs SET ID='$id',img='$img',job='$jobs',description='$description' WHERE ID='$id'";
    $res = mysqli_query($conn, $query);

    header("Location:edit.php");
    exit();
}
?>
</div>

<div class="subSection1"></div>
</body>
</html>