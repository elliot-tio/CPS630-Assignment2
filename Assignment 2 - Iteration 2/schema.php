<?php
// TODO: create databases

/*
CREATE TABLE Artists{
	
	artist_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	artwork_id INT,
	genre_id INT,
	artist_name VARCHAR(100) NOT NULL,
	DOB VARCHAR(100) NOT NULL,
	POL VARCHAR(100) NOT NULL,
	description VARCHAR(255) NOT NULL,
	PRIMARY KEY(artist_id),
	FOREIGN KEY(artwork_id) REFERENCES Artworks(artwork_id),
	FOREIGN KEY(genre_id) REFERENCES Genre(genre_id)

};

CREATE TABLE Artworks{

	artworks_id INT(100) NOT NULL AUTO_INCREMENT,
	images_id INT,
	imagel_id INT,
	artist_id INT,
	genre_id INT,
	subject_id INT,
	artwork_name VARCHAR(100) NOT NULL,
	price INT(100) UNSIGNED NOT NULL,
	artwork_date VARCHAR(100) NOT NULL,
	artwork_type VARCHAR(100) NOT NULL,
	description VARCHAR(255) NOT NULL,
	PRIMARY KEY(artworks_id),
	FOREIGN KEY(images_id) REFERENCES Images(images_id),
	FOREIGN KEY(imagel_id) REFERENCES Imagel(imagel_id),
	FOREIGN KEY(artist_id) REFERENCES Artist(artist_id),
	FOREIGN KEY(genre_id) REFERENCES Genre(genre_id).
	FOREIGN KEY(subject_id) REFERENCES Subject(subject_id)

};

CREATE TABLE Images{

	images_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	image_s VARCHAR(100) NOT NULL,
	PRIMARY KEY(images_id)

};

CREATE TABLE Imagel{

	imagel_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	image_l VARCHAR(100) NOT NULL,
	PRIMARY KEY(imagel_id)

};

CREATE TABLE Museum{

	museum_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	museum_name VARCHAR(100) NOT NULL,
	gallery_id INT,
	artworks_id INT,
	date VARCHAR(100) NOT NULL,
	location VARCHAR(100) NOT NULL,
	description VARCHAR(255) NOT NULL, //?????
	PRIMARY KEY(museum_id),
    FOREIGN KEY(gallery_id) REFERENCES Galleries(gallery_id),
    FOREIGN KEY(artworks_id) REFERENCES Artworks(artwork_id)

};


CREATE TABLE Galleries{

	gallery_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	gallery_name VARCHAR(100) NOT NULL,
	PRIMARY KEY(gallery_id)
};

CREATE TABLE Genre{

	genre_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	genre_name VARCHAR(100) NOT NULL,
	PRIMARY KEY(genre_id)
};

CREATE TABLE Subject{

	subject_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	subject_name VARCHAR(100) NOT NULL,
	PRIMARY KEY(subject_id)
};

CREATE TABLE ShoppingCart{

	SC_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	artwork_id INT,
	price INT(100), UNSIGNED NOT NULL,
	Quantity INT(100) UNSIGNED NOT NULL,
	S_method VARCHAR(100) NOT NULL,
	PRIMARY KEY(SC_id),
	FOREIGN KEY(artwork_id) REFERENCES Artworks(artwork_id)

};

CREATE TABLE Review{

	review_id INT(100) UNSIGNED NOT NULL AUTO_INCREMENT,
	artwork_id INT,
	PRIMARYKEY(review_id),
	FOREIGN KEY(artwork_id) REFERENCES Artworks(artwork_id)

}
*/
?>
