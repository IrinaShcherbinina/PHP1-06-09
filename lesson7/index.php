<?php 
    session_start(); 
    require("includes/coection.php"); 
    if(isset($_GET['page'])){ 
        $pages=array("products", "cart"); 
        if(in_array($_GET['page'], $pages)) { 
            $_page=$_GET['page']; 
        }else{ 
            $_page="products"; 
        } 
    }else{ 
        $_page="products"; 
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lesson7</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container"> 
        <div id="main"> <?php require($_page.".php"); ?>
        </div><!--end main-->
        <div id="sidebar"> 
        </div><!--end sidebar-->
    </div><!--end container-->
</body>
</html>
 
    