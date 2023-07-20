<?php
$news_count = mysqli_query($conn ,"SELECT COUNT('id') AS 'news_numbers' FROM `news`");
$news_count_result = mysqli_fetch_assoc($news_count);
?>

<?php
mysqli_close($conn);
?>
<?php
for ($i=0; $i < $news_count_result['news_numbers']/4; $i++) 
{
    echo '<a class="news_page-link" href="index.php?shift=' . $i*4 . '">' .( $i+1 ).  '</a>';
  
}
 $id=$_GET['shift']+4;
if($_GET['shift']!=16)
{
    echo '<a class="news_page-strelka" href="index.php?shift=' . $id . '">&rarr;</a>';
}
       


?> 