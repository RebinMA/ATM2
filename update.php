<!DOCTYPE>
<?PHP
	include 'connect.php';

	if(isset($_GET["id"])){
		
		$id = $_GET["id"];
		 //echo $id;
		$sql="select * from Users WHERE UID = '$id' ";
		$result=$db->query($sql);		
		$row=$result->fetch_assoc();
		
	}
	
	
?>
<html>
	<head>
		
	</head>
	<body>
		<form method="POST" action="">
		<table>
		 <tr>
				<tr>
					<td>First Name</td>
		<td><input type="text" name="Fname" required value="<?php echo $row['FName']; ?>" placeholder="First Name"></td><br>
		</tr>
		<br>
		<tr>
			<td> Last Name</td>
		<td><input type="text" name="Lname" required value="<?php echo $row['LName']; ?>" placeholder="Last Name"></td>
		</tr><br>
		
		    <td>Phone Number</td>
		<td><input type="number" name="Phone" value="<?php echo $row['Phone']; ?>" required placeholder=" "></td>
		</tr>
		
		<tr>
		    <td>Email</td>
		<td><input type="text" name="Email" value="<?php echo $row['Email']; ?>" required placeholder="Email"></td>
		</tr>
		<td colspan="2">
		<input type="submit" class="btn" name="update" value="Update"></td>
		</table>
		</form>
		
	</body>	
	
	
	
	
	<?php
		
		if(isset($_POST["update"])){
			
			
		$Fname = $_POST["Fname"];
		$Lname = $_POST["Lname"];
		$Phone = $_POST["Phone"];
		$Email = $_POST["Email"];
		
		$sql = "UPDATE `ATM`.`Users` SET `FName` = '$Fname' , `LName` = '$Lname' , `Phone` = '$Phone' , `Email` = '$Email'  WHERE `users`.`UID` = '$id' ;";
			
			if($db->query($sql)){
		 echo "Update Successfully";
		 }
		 else{
			 echo "There is problem while Updating please check again ;)";

		 }
			
		}
		
		
		
		
	?>
</html>		