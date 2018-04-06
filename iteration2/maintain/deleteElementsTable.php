<!DOCTYPE html>
<html>
<head>
</head>
<title>
	Maintain Mode Delete
</title>
<body>

<form action="deleteArtistTable.php" method="post">
	<h1>Maintain Mode Delete</h1>

			Artist
			<br>
			Artist Image ID <input type ="text" name="deleteImageIDAT" >
			<br>
			<input type ="submit" value="Submit">

</form>
		<br>
<form action="deleteArtworkTable.php" method="post">
		<table>

			Artwork
			<br>
			Image ID<input type ="text" name="deleteImageIDAW" >

			<br>
			<input type ="submit" value="Submit">
		</table>
</form>


		<br>

		 <button onClick="window.location='../maintain.php';"> Back to Maintain Mode</button>
</body>
</html>
