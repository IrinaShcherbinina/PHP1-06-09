    <?php     
				$server="localhost";     
				$user="tutorial";     
				$pass="";     
				$db="products";  

		// coect to mysql     
		mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");     

		// select the db    
		mysqli_select_db($db) or die("Sorry, can't select the database."); 

?>