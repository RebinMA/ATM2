<!DOCTYPE>
<?PHP
	include 'connect.php';

	if(isset($_POST["submit"])){
		$Balance = $_POST["Balance"];
		$Fname = $_POST["Fname"];
		

		$sql = "SELECT * FROM `Users` where `FName` = '$Fname'"; 
			
			$query=$db->query($sql);
			$row=$query->fetch_assoc();
			$oldOne = $row["Balance"];
			
			if($Balance > $oldOne){
				
				echo "<div class=\"alert alert-danger\">
			 	<strong> You can not Withdrawal this amount of money ;)</strong>
				</div>";
			}else{
				
			$ID = $row["UID"];
			$Name = $row["FName"].' '.$row["LName"];
			
			
			$oldOne = $row["Balance"];	
			$sql="INSERT INTO `ATM`.`Trans` (`ID`, `Name`, `Type`, `Amount`, `Date`) VALUES ('$ID', '$Name', 'Withdrawal', '$Balance', '');
";			
			$query=$db->query($sql);
			
			$newOne = $oldOne - $Balance;
			
	
		$sql="UPDATE `ATM`.`Users` SET `Balance` = '$newOne' WHERE `users`.`FName` = '$Fname' ;";
		 //echo $sql;
		 if($db->query($sql)){
		 echo "Successfully";
		 }
		 else{
			 echo "There is problem while Withdrawal please check again ;)";

		 }
}
	}
	
?>
<html>
	<head>
		 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#name" ).autocomplete({
      source: 'auto.php'
    });
  });
  </script>

	</head>
	<body>
		
<form action="" method="POST">
			<table align="center">
				
		
		<tr>
			<td>First Name</td>
		<td><input type="text" id="name" name="Fname" required placeholder="First Name"></td><br>
		</tr>
				
		<tr>
			<td>Balance</td>
	    <td><input type="number" name="Balance" required placeholder="Balance"></td>
	    </tr><br>
	    <tr>
		

		<td colspan="2">
		<input type="submit" class="btn" name="submit" value="Withdrawal"></td>
			</table>
		  
		</form>
	</body>	
</html>		