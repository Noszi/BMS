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
        <a href="index.html">Back To Home Page</a>
    </nav>
</div>
<div class="sect sectJobs">
<!--    the jobs tabel for the viewers-->
<table class="tabel" >
    <tr>

        <th>img</th>
        <th>job</th>
        <th colspan="3">description</th>
    </tr>
    <?php
    include("config.php");
    $sql="SELECT * FROM jobs";
    $result = mysqli_query($connection, $sql) ;
    if(mysqli_num_rows($result) != 0) {
        while ($record = mysqli_fetch_array($result)) {
            $job = $record["job"];
            $id = $record["ID"];
            $img = $record["img"];
            $description = $record["description"];

            echo "<tr>";
            echo "<td class='title'>$id</td>";
            echo "<td><img src='$img' class='small'></td>";
            echo "<td class='title'>$job</td>";
            echo "<td>$description</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</div>
<div class="subSection1">
    <div class="social">
        <ul>
            <li class="facebook"><a href="https://www.facebook.com/noszkovic.daniel" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
            <li class="instagram"><a href="https://www.instagram.com/xnoszix/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
        </ul>
        <p>Hackerman @ 2018 copyright.All rights reserved.</p>
    </div>
</div>
</body>
</html>