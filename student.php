<?php
  if( $_POST["nm"] )
  {
     echo "Welcome ". $_POST['nm']. "<br />";
     echo "You are in". $_POST['cls']. " Class.";
	 echo "mobile no is". $_POST['mob']."mobile" ;
	 
	  $dbLink = new mysqli('localhost', 'root', '', 'student');
	 
	 if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
		// Gather all required data
        $name = $_POST['nm'];
        $class = $_POST['cls'];
        $cname = $_POST['cname'];
        $mobno = $_POST['mob'];
 
        // Create the SQL query
        $query = "
            INSERT INTO `main_info` (
                `name`, `class`, `college`, `mobile No`, `date`
            )
            VALUES (
                '{$name}', '{$class}', '{$cname}', '{$mobno}', NOW()
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
			
				
		$dbLink->close();
		?>
	 <html>
     <a href="index.html">You have Registered Successfully for Event click here to go back</a>
	 </html>
	 <?php
  }
  else
  {
			echo "please repeat the procedure by filling the \"Name\"";
  }
?>