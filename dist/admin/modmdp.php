<?php 
include("../config.php");
session_start();// démarrer une session
$login= $_SESSION['pseudo'];
$profile = $_SESSION['type'];
$nom= $_SESSION['nom'];
$full_name=$_SESSION['full_name'];
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
	   
         <form id="modifier" method="post" >
			<fieldset>
				<legend>modifier</legend>
				<label for="pass">mot de passe: </label><input type="password" id="pass" name="pass"/><br />
			   <label for="pass1">nouveau mot de passe: </label><input type="password" id="pass1" name="pass1"/><br />
               </select>
				<input type="submit"   name="envoi2" value="modifier"/>				
			</fieldset>			
		</form>
<?php		
if(isset($_POST['envoi2'])){
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];

$sql="SELECT mdp from user WHERE pseudo='$user'";
$res=mysqli_query($conn,$sql);
$donne=mysqli_fetch_assoc($res);

if($pass==$donne['mdp']){
$sql="UPDATE user SET pass='$pass1' WHERE pseudo='$user'";
$res=mysqli_query($conn,$sql);
echo'mot de passe modifi� avec succes';
}
else echo'mot de passe incorrecte';
}
		?></div>
<div id="pied"></div>	
	</div>
	</body>
</html>
