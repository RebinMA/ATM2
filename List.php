<!doctype html>
<html>
	<style>


td + td {
  
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
		
		
		<?PHP
			
			Include('connect.php');

			$sql="select * from Users";
			$result=$db->query($sql);
			
			echo "<table>";
			echo "<th>ID </th>";
			echo "<th>First name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Blanace </th>";
			echo "<th>Action </th>";
			echo "<th> </th>";
			
		
			
		
			
			while($row=$result->fetch_assoc()){

			 // echo "<td>" .'<img src="data:image/jpeg;base64,'.base64_encode( $row['pic'] ).'" width="100" height="100"/> ' . "</td>";					
			echo "<tr >";
				
			
			echo   "<td>" .$row['UID'] . "</td>";
			echo   "<td>" .$row['FName'] . "</td>";
			echo   "<td>" .$row['LName'] . "</td>";
			echo   "<td>" .$row['Balance'] . "</td>";
			echo "<td class='td'><a href=\"index.php?pid=7&id=".$row['UID']."\"><span class='glyphicon glyphicon-edit'></span> Update</a></td>";
			echo "<td class='td'><a href=\"index.php?pid=8&id=".$row['UID']."\"  onclick=\"return confirm('Are You Sure to Detele');\"><span 			class='glyphicon glyphicon-trash'></span>Delete</a></td>";
				
				
			echo "</tr>";
				//echo " </tbody>";


			}
				
		    echo "</table>";
		   
		    
		    
	
		?>	
	</body>
	
	
</html>