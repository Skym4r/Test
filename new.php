<?php
include "databaseconnect.php";
 
$result = mysqli_query($conn, "SELECT * FROM `news` WHERE `id` =  " . $_GET['page']);

while ($row = mysqli_fetch_assoc($result))
{  
    printf("
    <div class='mini'> Гланая / %s</div>
    <div class='big'>%s</div>
    <div ><p class='date'>%s</p></div>
    <table>
    <tr>
        <td class='content'>
            <h3 class='opisnie'>%s</h3>
            %s
        </td>
        <td class='photo'><img src='/images/%s'></td>
    <tr>
    </table>
    <br>
    <div class='but'>
        <a href='index.php'>
             &larr; НАЗАД К НОВОСТЯМ
        </a>
    <div>
    <div class='pud'>
    <div>
    ", $row["title"], $row["title"], date('d.m.Y', strtotime($row['date'])),$row["announce"],$row['content'],$row["image"] );
 
}
mysqli_free_result($result);
?>