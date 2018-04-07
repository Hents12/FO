create database DW;

create Table produit1(
	 idproduit tinyint NOT NULL auto_increment,
	 image varchar(100),
	 Alt varchar(100),
	 Libelle varchar(50),
	 Couleur varchar(20),
	 Prix float,
	 DateProduction Date,
	 Primary key(idproduit)
	 
);

insert into produit values(1,'classic-black-sheffield.jpg','Daniel wellington classic black sheffield','Classic Black Sheffield' ,'Noir' , 129, '2016-03-12');
insert into produit values(2,'Classic-Petite-Melrose.jpg','Daniel wellington Classic Petite Melrose','Classic Petite Melrose' , 'Rose', 150, '2017-12-22');
insert into produit values(3,'classic-petite-melrose-noir.jpg','Daniel wellington Classic Petite Melrose Noir ','Classic Petite Melrose Noir', 'Rose' , 150, '2018-01-21');
insert into produit values(4,'classic-petite-sterling.jpg','Daniel wellington Classic Petite Sterling','Classic Petite Sterling' ,'Gris', 145, '2018-02-21');
insert into produit values(5,'classic-white-sheffield.jpg','Daniel wellington classic white sheffield','Classic White Sheffield' ,'Noir' , 129, '2016-03-12');
insert into produit values(6,'classic-men.jpg','Daniel wellington classic men','Classic Men' ,'Tri-color' , 90, '2016-03-12');
insert into produit values('','',);
insert into produit values('','',);
insert into produit values('','',);

create Table Admin(
	
	idadmin tinyint NOT NULL auto_increment,
	Nom varchar(20),
	Pass varchar(20),

	Primary key(idadmin)
);

insert into Admin values(1, 'Mananirina', 'daniel');