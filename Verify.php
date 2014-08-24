<html>

<style>
table,th,td
{
border:2px solid black;
}
td
{
padding:15px;
}

</style>

</html>


<?php
	
		
		echo $_POST['name'].$_POST['passd']."<br />";
		if(($_POST['name']=='wlug') && ($_POST['passd']=='ram'))
		{
			
			
			//setcookie("name", $_POST['name'], time()+70, "/","", 0);
			//setcookie("passd", $_POST['passd'], time()+70, "/", "",  0);
			
			//echo $_COOKIE['name']. "<br />";
			
			$dbLink = new mysqli('localhost', 'root', '', 'student');
			
						echo "Welcome " . $_POST['name'] . "<br />";
						if(mysqli_connect_errno()) {
						die("MySQL connection failed: ". mysqli_connect_error());
						}
						
						$query="
						SELECT `id`,`name`, `class`, `college`, `mobile No`, `date`
						FROM `main_info`";
						$result = $dbLink->query($query);
						//print_r($result);
						echo "hi"."<br />";
				if($result) {
				
							echo "hi"."<br />";
                          // Make sure the result is valid
						  
						  echo "<table name=\"student info\">";
							while ($row=mysqli_fetch_array($result))
							{
								echo "<tr>"."<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['class']."</td>"."<td>".$row['college']."</td>"."</tr>";
				
								
							}
							echo "</table>";
					}
					else 
					{
						echo '\n Error! no record exist.';
					}
				
					//	echo'no query executed';
		}
		
		else
		{
			
				echo "username invalid";
		}
?>