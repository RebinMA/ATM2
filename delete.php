<!DOCTYPE>
<?PHP
	include 'connect.php';

	if(isset($_GET["id"])){
		
		$id = $_GET["id"];
		 //echo $id;
		$sql="DELETE FROM `ATM`.`Users` WHERE `users`.`UID` = '$id' ";
		$result=$db->query($sql);		
		if($db->query($sql)){
		 echo "Deleted Successfully";
		 }
		 else{
			 echo "There is problem while Deleting please check again ;)";

		 }
	}
	
	
?>
