<!DOCTYPE html>
<html lang="en">
<?php
	 session_start();
	if(isset($_GET["pid"])){
		$pid = $_GET["pid"];
		
	}
	else{
		$_GET["pid"]=10;
		$pid=10;
	}
	
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bank</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php?pid=10">Home</a>
            </div>
			
				<?PHP
		
		
	if(isset($_SESSION['username']))
	{?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="index.php?pid=1"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?pid=1">Create User</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?pid=2">List All</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?pid=4">Transaction</a>
                    </li>
                    
                     <li>
                        <a class="page-scroll" href="index.php?pid=3">List Of Transaction</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?pid=11">Log out</a>
                    </li>
                </ul>
            </div>
              <?PHP	} else { ?>
              <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                  
                   
                     <li >
                        <a href="index.php?pid=9"><span class="glyphicon glyphicon-log-in"></span> Log in</a>
                    </li>
                </ul>
            </div>
               <?php }
		
	?>
            <!-- /.navbar-collapse -->
        </div>
        
        <!-- /.container -->
    </nav>
    
      <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
	                       switch($pid){
		                       ////////ASO
		                       case 1:
		                       include 'Create.php';
		                       break;
		                       case 2:
		                       include 'List.php';
		                       break;
		                       case 3:
		                       include 'Trans.php';
		                       break;
		                       case 4:
		                       ?>
		                       
		                      
	<a href="index.php?pid=5"><input   class="btn btn-success btn-lg" type="button" value="Deposit" name="submit"></a>
	<a href="index.php?pid=6"><input  class="btn btn-primary btn-lg" type="button" value="Withdrawal"  name="submit"></a>
		                       
		                       <?
		                       break;
		                       case 5:
		                       include 'Deposit.php';
		                       break;
		                       case 6:
		                       include 'Withdraw.php';
		                       break;
		                       case 7:
		                       include 'update.php';
		                       break;
		                       
		                       case 8:
		                       include 'delete.php';
		                       break;
		                       case 9:
		                       include 'login.php';
		                       break;
		                       case 11:
		                       unset($_SESSION['username']);
		                       header("Location: index.php?pid=10");
		                       break;
		                       case 10:
		                       echo "<h1>Welcome to our Bank ;) </h1>";
		                       break;
		                      
	                       }
	                       
                       ?>

                </div>
            </div>
        </div>
    </section>
	
		 
    
</body>

</html>
