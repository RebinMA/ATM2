<?PHP
     
     
  
   include 'connect.php';


  if(isset($_POST["submit"])){
	  
    $name = $_POST["username"];
    $password = $_POST["password"];
    
        
    

      $sql = "SELECT * FROM `Users` WHERE `Username` = '$name' AND
          `Password` LIKE '$password' ";
          
      $query =$db->query($sql);
      $result = $query->fetch_assoc();
      

  

      if(($result)){
        
        $_SESSION["username"]= $_REQUEST['username'];
        header("Location: index.php?pid=10");

        }
      else {
      echo "username or password is not correct";
      }



  }
  
?>
<html>

   
   <head>
      
      
    
      
   </head>
   
   <body>

  

	
     
               <form action="" method="POST">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box" required /><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" required /><br/><br />
                  
                  <input type = "submit" name="submit" value = " Submit " align="center"   /><br />

                
               </form>
               
              

   </body>
</html>
  


