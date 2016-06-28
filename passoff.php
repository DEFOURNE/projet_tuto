<html>
<head>
	<meta charset="utf-8"/>
	<TITLE>Donkili-Do</TITLE>
	<link rel="stylesheet" href="form.css"/>
	<link href="LOGO_accueil2.png" rel="shortcut icon" >
</head>

<body>
<div class="header">
	<a href="accueil.html"><div class="photo"></div></a>
   	<center><H1> CHORALE DE PUGET-SUR-DURANCE</H1></center>
</div>

<div align=center>
	<form method=POST action=mail.php >
		<input type=hidden name=subject value=mail>
		<table>

			<tr><td>Votre Identifiant:</td>
			<td><input type=text name=identifiant size=30></td></tr>

			<tr><td>Votre Email:</td>
			<td><input type=text name=email size=30></td></tr>

		</table>

		<br> <input type=submit value=Envoyer> -
		<input type=reset value=Annuler>
	</form>
</div> 


</body>
</html>
