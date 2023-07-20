<?php
include "databaseconnect.php";


$shift = 0;
if(isset($_GET['shift'])){
    $shift = $_GET['shift'];
}
$result = mysqli_query($conn,  "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1 OFFSET 0");
while ($row = mysqli_fetch_assoc($result)) {
    printf("
    <div class='latest_news'>
    <img src='/images/%s'>
    <div class='text_1'>%s</div>
    <div class='text_2'>%s</div>
    </div>
     ",$row["image"], $row["title"], $row["announce"]);
}
mysqli_free_result($result);