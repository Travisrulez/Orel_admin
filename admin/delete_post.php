<?php
include("../app/include/database.php");
error_reporting(0);
session_start();
mysqli_query($link,"DELETE FROM posts WHERE id = '".$_GET['del_post']."'");
header("location:allposts.php");  
?>