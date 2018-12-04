#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: images_brutes
#------------------------------------------------------------

CREATE TABLE images_brutes(
        ID_imgbrutes  Int  Auto_increment  NOT NULL ,
        Url_imgbrutes Varchar (1000) NOT NULL ,
        nom_imgbrutes Varchar (255) NOT NULL ,
        chemin_img    Varchar (255) NOT NULL
	,CONSTRAINT images_brutes_PK PRIMARY KEY (ID_imgbrutes)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: memes
#------------------------------------------------------------

CREATE TABLE memes(
        Id_memes  Int  Auto_increment  NOT NULL ,
        img_memes Varchar (1000) NOT NULL ,
        titre     Varchar (255) NOT NULL
	,CONSTRAINT memes_PK PRIMARY KEY (Id_memes)
)ENGINE=InnoDB;

