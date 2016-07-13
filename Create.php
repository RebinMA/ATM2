<!DOCTYPE>
<?PHP
	include 'connect.php';

	if(isset($_POST["submit"])){
		$Balance = $_POST["Balance"];
		$Fname = $_POST["Fname"];
		$Lname = $_POST["Lname"];
		$Phone = $_POST["Phone"];
		$Email = $_POST["Email"];
		$date = $_POST["date"];
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		
		
		
				
		$sql="INSERT INTO `ATM`.`Users` (`UID`, `Username`, `Password`, `Balance`, `FName`, `LName`, `Phone`, `Email`, `Date`) VALUES (NULL, '$username' , '$pass', '$Balance', '$Fname', '$Lname', '$Phone', '$Email', '$date');";
		 //echo $sql;
		 if($db->query($sql)){
		 echo "Saved Successfully";
		 }
		 else{
			 echo "There is problem while Inserting please check again ;)";

		 }
	}
	
?>
<html>
	<head>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
			
			$(function() {
			 $( ".date" ).datepicker({
			 dateFormat : 'dd/mm/yy',
			 showOn: "button",
			 buttonImage: "https://htmlcssphptutorial.files.wordpress.com/2015/09/b_calendar.png",
			 buttonImageOnly: true,
			 buttonText: "Select date"
			 }); 
			}); 
		</script>
	</head>
	<body>
		
<form action="" method="POST">
			<table align="center">
				
		<tr>
			<td>Balance</td>
	    <td><input type="number" name="Balance" required placeholder="Balance"></td>
	    </tr><br>
	    <tr>
				<tr>
					<td>First Name</td>
		<td><input type="text" name="Fname" required placeholder="First Name"></td><br>
		</tr>
		<tr>
			<td> Last Name</td>
		<td><input type="text" name="Lname" required placeholder="Last Name"></td>
		</tr><br>
		
		<tr>
				<tr>
					<td>Username</td>
		<td><input type="text" name="username" required placeholder="username"></td><br>
		</tr>
		<tr>
				<tr>
					<td>Password:</td>
		<td><input type="password" name="pass" required placeholder="password"></td><br>
		</tr>
		
		    <td>Phone Number</td>
		<td><input type="number" name="Phone" required placeholder=" "></td>
		</tr>
		
		<tr>
		    <td>Email</td>
		<td><input type="text" name="Email" required placeholder="Email"></td>
		</tr>
		
		<tr>
		    <td>Date</td>
		<td><input type="date" class="date" name="date" required placeholder=""></td>
		</tr><br>
		
				
		
		
		
		<td colspan="2">
		<input type="submit" class="btn" name="submit" value="Add User"></td>
			</table>
		  
		</form>
	</body>	
</html>		