<!DOCTYPE html>
<html>
<head>
</head>
<title>
	Maintain Mode Add
</title>
<body>

<form action="addArtistTable.php" method="post">
	<h1>Maintain Mode Add</h1>

			Artist
			<br>

			Image ID <input type ="text" name="addImageIDAT" >
			<br>
			ImageL ID<input type ="text" name="addImageLIDAT" >
			<br>
			Genre ID<input type ="text" name="addGenreIDAT" >
			<br>
			Artist Name<input type ="text" name="addArtistAT" >
			<br>
			DOB <input type ="text" name="addDOBAT" >
			<br>
			POL<input type ="text" name="addPOLAT" >
			<br>
			Famous Works<input type ="text" name="addFamousAT" >
			<br>
			Description <input type ="text" name="addDescriptionAT" >
			<br>
			More Info<input type ="text" name="addInfoAT" >
			<br>
			<input type ="submit" >

</form>
		<br>
<form action="addArtworkTable.php" method="post">
		<table>

			Artwork
			<br>
			Image ID<input type ="text" name="addImageIDAW" >
			<br>
			ImageL ID<input type ="text" name="addImageLIDAW" >
			<br>
			Artist ID<input type ="text" name="addArtistAW" >
			<br>
			Genre ID<input type ="text" name="addGenreAW" >
			<br>
			Subject ID<input type ="text" name="addSubjectAW" >
			<br>
			Dimensions<input type ="text" name="addDimensionsAW" >
			<br>
			Location<input type ="text" name="addLocationAW" >
			<br>
			Artwork Name<input type ="text" name="addArtworkAW" >
			<br>
			Price <input type ="text" name="addPriceAW" >
			<br>
			Artwork Date <input type ="text" name="addArtworkDateAW" >
			<br>
			Artwork Type <input type ="text" name="addArtworkTypeAW" >
			<br>
			Description <input type ="text" name="addDescriptionAW">
			<br>
			More Info <input type ="text" name="addInfoAW" >
			<br>
			<input type ="submit" value="Submit">
		</table>
</form>


		<br>

		 <button onClick="window.location='../maintain.php';"> Back to Maintain Mode</button>
</body>
</html>
