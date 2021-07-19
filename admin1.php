<?php
include("config.php");
?>

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
<nav>
    <a href="index.html">Back To Home Page</a>
</nav>
<div class="subSection"></div>
<div class="sect sectAdmin">
<!--    table for editing the jobs table in the admin panel-->
   <table align="center" class="tabel">
       <tr>

           <th>img</th>
           <th>job</th>
           <th colspan="3">description</th>
       </tr>
           <?php
           $sql="SELECT * FROM jobs";
           $result = mysqli_query($connection, $sql) ;
           if(mysqli_num_rows($result) != 0) {
               while ($record = mysqli_fetch_array($result)) {
                   $job = $record["job"];
                   $id = $record["ID"];
                   $img = $record["img"];
                   $description = $record["description"];

                    echo "<tr>";
                   // echo "<td class='title'>$id</td>";
                    echo "<td><img src='$img' class='small'></td>";
                    echo "<td class='title'>$job</td>";
                    echo "<td>$description</td>";
                    echo "<td id='edittd'><a href='edit.php?id=$id' id='edit'><img src='edit.png' id='editpict'/></a></td>";
                    echo "<td id='deleted'><a href='delete.php?id=$id' id='delete'><img src='delete-1727486_640.png' id='deletepict'/><br/></a></td>";
                    echo "</tr>";
               }
           }
           echo "</table>";
           echo "<a href='create.php'><img src='create.png' id='buttn'/></a>";
           ?>

</div>
<div class="subSection1">
</div>
</body>
</html>