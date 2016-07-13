<!doctype html>
<html>
	<style>


td + td {
  border-left:1px solid #eee;
}
td, th {
	
  border-bottom:1px solid #eee;
  background: #ddd;
  color: #000;
  padding: 10px 35px;
}
table tr:nth-child(odd) td{
	    background-color:#ccc;
	    font-size: 20px bold;
}
table tr:nth-child(even) td{
	    background-color:#f8f8f8;
}
img{
	border-radius: 15px;
}
th{
	  font-size: 20px;
}



</style>


	<body>
		
		<form action="" method="POST">
		<input type="text" name="id" placeholder="User ID">
		<input type="submit" value="Serach" name="search">
		</form>
		<br>
		<?PHP
			Include('connect.php');
			
			if(isset($_POST["search"])){
				
			$id = $_POST["id"];	

			$sql="SELECT * FROM `Trans` WHERE ID = $id";
			$result=$db->query($sql);
			
			echo "<table>";
			
			echo "<th>Name</th>";
			echo "<th>Type </th>";
			echo "<th>Amount </th>";
			echo "<th>Date </th>";
			
		
			
		
			
			while($row=$result->fetch_assoc()){

			echo "<tr >";
				
			
			echo   "<td>" .$row['Name'] . "</td>";
			echo   "<td>" .$row['Type'] . "</td>";
			echo   "<td>" .$row['Amount'] . "</td>";
			echo   "<td>" .$row['Date'] . "</td>";
							
				
			echo "</tr>";


			}
				
		    echo "</table>";
		   
		    
		    }
	
		?>	
	</body>
	
	
</html>