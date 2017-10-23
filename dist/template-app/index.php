
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Connexion</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
            <?php
$fp = fopen("utilisateurs.txt","r");
$chaine=$nom.":".$passwd;
while (!feof($fp)) { 
$page = fgets($fp, 4096);
$page=eregi_replace("\n","",$page);
if($page==$chaine)
    {
    echo "<b>Acces autorisé pour $nom</b>\n";
    echo "            \n";
    echo "<a href=\"changer_passwd.php?nom=$nom&passwd=$passwd\"><img src=\"images/change_passwd.jpg\"></a>\n";
    echo " \n";
    echo "<a href=\"enregistrement1.php?nom=$nom&passwd=$passwd\"><img src=\"images/init_cmpt.jpg\"></a>\n";
    echo " ";
    echo "<a href=\"index.html\"><img src=\"images/quitter.jpg\"></a>";
    $temoin="true";
    break;
    }
$temoin="false";
}
fclose($fp);
if ($temoin=="false")
{
echo "<b>Accès Refusé !</b>\n<br>Assurez vous que votre login et mot de passe sont valides,<br>ou bien créez un compte.";
echo "<br><hr><br><a href=\"index.html\"><img src=\"images/retour.jpg\"></a></BODY></HTML>";
exit();
}
?>
				<form>
						<input type="text" class="text" value="IDENTIFIANT" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit">
                            <p ><button class="w3-button w3-green w3-round"><a style="color: aliceblue" href="accueil.html">Ce connecter</a></button></p>

                            
					</div>	
				</form>
			</div>
			
				<!-----//end-copyright---->
		</div>
			 <!-----//end-main---->
		 		
</body>
</html>