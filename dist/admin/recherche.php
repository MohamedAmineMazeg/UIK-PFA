<?php 

include("../config.php");
session_start();// d�marrer une session

$profile= $_SESSION['pseudo'];
$nom= $_SESSION['nom'];





?>

<html>
	<head><link href="../css/cssmodifier.css" rel="stylesheet" type="text/css" title="TITRE" />
<title>modification des comptes</title>
	</head>
	<body>
	<div id='page'>
	<div id='entete'><?php include("../header/head.php"); ?></div>
	<div id="menu">	<ul > 

	<li><a href="compte.php">compte</a></li> 
	<li><a href="home.php">accueil</a></li> 
	</ul ></div>
	<div id="corp">
	
		
	
<?php	
		  $res=mysqli_query($conn," SELECT * FROM user ");
		    
            ?>
<table  border="2" id="tab1">
 	   <TH>NOM</TH> <TH>PRENOM</TH> <TH>LOGIN</TH> <TH>Role</TH> <TH>email</TH> <TH>Photo</TH>
<?php while($tab=mysqli_fetch_array($res,MYSQLI_BOTH)){ ?>
  <tr ><td> <?php echo $tab['nom']?></td><td><?php echo $tab['prenom']?></td><td><?php echo $tab['pseudo']?></td><td><?php echo $tab['role']?></td>
  <td><?php echo $tab['email']?></td><td><?php echo "<img src='$tab[photo]' width='50' height='50'>";?></td></tr>
                                        
	  <?php } ?>                            
	  
	  </table> 
         
		</div>
<div id="pied"></div>	
	</div>
	</body>
</html>
