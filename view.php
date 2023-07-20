<?php
include "databaseconnect.php";


$shift = 0;
if(isset($_GET['shift'])){
    $shift = $_GET['shift'];
}
$result = mysqli_query($conn,  "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 4 OFFSET $shift");
while ($row = mysqli_fetch_assoc($result)) {  
    printf("
    <div class='card'>
        <a href='/news.php?page=%s'>
            <p class='date'>%s</p>
            <p class='title'>%s</p>
            <div class='announce'>%s</div>
            <br>
            <button> ПОДРОБНЕЕ &rarr;</button>   
        </a>
    </div>
    ",$row['id'], date('d.m.Y', strtotime($row['date'])), $row["title"], $row["announce"]);
    
}
mysqli_free_result($result);

?>