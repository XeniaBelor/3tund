<?php

	//Loogimine sisse muutujad
	$loginEmailError = $loginPasswordError = "";
	
	//loomine muutujad
	$signupEmailError = $signupPasswordError = $signupNickNameError = $signupSugu = "";
	
	//Loogimine sisse

	if (isset ($_POST["loginEmail"])) {
		if (empty ($_POST["loginEmail"])) {
			$loginEmailError = "* Väli on kohustuslik!";
		}
	}
	
	
	if (isset ($_POST["loginPassword"])) {
		if (empty ($_POST["loginPassword"])) {
			$loginPasswordError = "* Väli on kohustuslik!";
		} else {
			
		}if (strlen ($_POST["loginPassword"]) <8)
			$loginPasswordError = "* Parool peab olema vähemalt 8 tähemärkki pikk!";
	}
	
	//Kasutaja registreerimine
	
	
	if (isset ($_POST["signupEmail"])) {
		if (empty ($_POST["signupEmail"])) {
			$signupEmailError = "* Väli on kohustuslik!";
		}
	}
	
	
	if (isset ($_POST["signupPassword"])) {
		if (empty ($_POST["signupPassword"])) {
			$signupPasswordError = "* Väli on kohustuslik!";
		} else {
			
		}if (strlen ($_POST["signupPassword"]) <8)
			$signupPasswordError = "* Parool peab olema vähemalt 8 tähemärkki pikk!";
	}
	
	
	if (isset ($_POST["signupNickName"])) {
		if (empty ($_POST["signupNickName"])) {
			$signupNickNameError = "* Väli on kohustuslik!";
		} else {
			
			}if (strlen ($_POST["signupNickName"]) <8)
				$signupNickNameError = "* Nimi peab olema vähemalt 8 tähemärkki pikk!";
	}
	
?>

<!DOCTYPE html>

<html>
		
		<head>
				<title>Sisselogimise leht</title>
		<center>
		<style>	
		body {
			background-image:	url("https://pp.vk.me/c636017/v636017905/28122/Jjn90hQPABY.jpg");
			background-repeat: no-repeat;
			background-position: left top;
			background-attachment: fixed;
			}
		
		.MVPborder
		{
		width: 450px;
		height: 125px;
		border:3px solid;
		border-color:#A1D852;
		margin: 20px;
		} 
		
		</style>
		</head>
		
		
		<body>
		
				<h1>Logi sisse</h1>
				<form method="POST" >
				
					<label></label><br>
					<input name="loginEmail" type = "email" placeholder="E-post">
						<br><font color="red"><?php echo $loginEmailError; ?></font></br>
					
					<input name="loginPassword" type = "password" placeholder="Parool"> 
						<font color="red"><br><?php echo $loginPasswordError; ?></font></br>
					
					<input type="submit" style="background-color:#A1D852; color:white" value="Logi sisse">
				</form>

				
				<h1>Loo kasutaja</h1>
				<form method="POST" >
				
					<label></label><br>	
					<input name="signupEmail" type = "email" placeholder="E-post">
						<br><font color="red"><?php echo $signupEmailError; ?></font></br>
					
					<input name="signupPassword" type = "password" placeholder="Parool"> 
						<br><font color="red"><?php echo $signupPasswordError; ?></font></br>
					
					<input name="signupNickName" placeholder="Nickname"> 
						<br><font color="red"><?php echo $signupNickNameError; ?></font></br>
					
					<p><label for="sünnipäev">Sünnipäev:</label><br>
					<input name= "sünnipäev" type="date" id="sünnipäev" required>
					
					<p><label for="signupSugu">Sugu:</label><br>
					<select name = "signupSugu"  id="signupSugu" required><br><br>
					<option value="">Näita</option>
					<option value="1">Mees</option>
					<option value="2">Naine</option>
					</select><br><br>
					

				<input type="submit" style="background-color:#A1D852; color:white;" value="Loo kasutaja">
					
				<h1>MVP idee</h1>
				<form method="POST" >
				<p class="MVPborder"><br>Minu MVP idee on luua veebileht, kus inimesed saaksid kirjutada
				ülevaaded kohtades, kus nad sööma käisid, kas meeldinud toit/personaal/hind.
				Tulevad kategooriad nagu asukoht(riig/linnas), tüüp (restoran/kohvik jne), 
				hind, pallid (kui palju pallid antsid söögikohale).</p>
				<br><br>
				</center>	
				</form>
			
		</body>
		

</html>