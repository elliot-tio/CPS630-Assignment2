<!DOCTYPE html>
<html>
<head>
</head>
<title>
	Maintain Mode Modify
</title>
<body>

<form action="modifyArtistTable.php" method="post">
	<h1>Maintain Mode Modify</h1>
	
					Artist
			<br>
			
			Image ID <input type ="text" name="modImageIDAT" >
			<br>
			ImageL ID<input type ="text" name="modImageLIDAT" >
			<br>
			Genre ID<input type ="text" name="modGenreIDAT" >
			<br>
			Artist Name<input type ="text" name="modArtistAT" >
			<br>
			DOB <input type ="text" name="modDOBAT" >
			<br>
			POL<input type ="text" name="modPOLAT" >
			<br>
			Famous Works<input type ="text" name="modFamousAT" >
			<br>
			Description <input type ="text" name="modDescriptionAT" >
			<br>
			More Info<input type ="text" name="modInfoAT" >
			<br>
			<input type ="submit" value="Update">

</form>
		<br>
<form action="modifyArtworkTable.php" method="post">
		<table>
		
		Artwork
			<br>
			Image ID<input type ="text" name="modImageIDAW" >
			<br>
			ImageL ID<input type ="text" name="modImageLIDAW" >
			<br>
			Artist ID<input type ="text" name="modArtistAW" >
			<br>
			Genre ID<input type ="text" name="modGenreAW" >
			<br>
			Subject ID<input type ="text" name="modSubjectAW" >
			<br>
			Dimensions<input type ="text" name="modDimensionsAW" >
			<br>
			Location<input type ="text" name="modLocationAW" >
			<br>
			Artwork Name<input type ="text" name="modArtworkAW" >
			<br>
			Price <input type ="text" name="modPriceAW" >
			<br>
			Artwork Date <input type ="text" name="modArtworkDateAW" >
			<br>
			Artwork Type <input type ="text" name="modArtworkTypeAW" >
			<br>
			Description <input type ="text" name="modDescriptionAW">
			<br>
			More Info <input type ="text" name="modInfoAW" >
			<br>
			<input type ="submit" value="Update">
		</table>
</form>
	
	
		<br>
	
		 <button onClick="window.location='maintain.php';"> Back to Maintain Mode</button>
</body>
</html>
	


