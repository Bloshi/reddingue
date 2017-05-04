#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        utilisateurID      int (11) Auto_increment  NOT NULL ,
        t_nom              Varchar (253) ,
        t_prenom           Varchar (255) ,
        t_adresse_physique Varchar (255) ,
        t_mail             Varchar (255) ,
        i_numero           Int ,
        i_telephone        Int ,
        contactID          Int ,
        evenementID        Int ,
        remarqueID         Int ,
        PRIMARY KEY (utilisateurID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contact
#------------------------------------------------------------

CREATE TABLE contact(
        contactID          int (11) Auto_increment  NOT NULL ,
        ti_type_de_contact TinyINT ,
        t_objet            Text ,
        t_societe          Varchar (255) ,
        utilisateurID      Int ,
        PRIMARY KEY (contactID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: formule
#------------------------------------------------------------

CREATE TABLE formule(
        formuleID     int (11) Auto_increment  NOT NULL ,
        t_nom_formule Varchar (255) ,
        evenementID   Int ,
        PRIMARY KEY (formuleID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: remarque
#------------------------------------------------------------

CREATE TABLE remarque(
        remarqueID    int (11) Auto_increment  NOT NULL ,
        t_remarque    Text ,
        evenementID   Int ,
        utilisateurID Int ,
        PRIMARY KEY (remarqueID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evenement
#------------------------------------------------------------

CREATE TABLE evenement(
        evenementID       int (11) Auto_increment  NOT NULL ,
        t_titre_evenement Varchar (255) ,
        t_description     Longtext ,
        d_date            Datetime ,
        t_lieu            Varchar (255) ,
        ti_prive          TinyINT ,
        PRIMARY KEY (evenementID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: image
#------------------------------------------------------------

CREATE TABLE image(
        imageEventID int (11) Auto_increment  NOT NULL ,
        t_url_image  Varchar (255) ,
        evenementID  Int ,
        PRIMARY KEY (imageEventID )
)ENGINE=InnoDB;

ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_contactID FOREIGN KEY (contactID) REFERENCES contact(contactID);
ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_remarqueID FOREIGN KEY (remarqueID) REFERENCES remarque(remarqueID);
ALTER TABLE contact ADD CONSTRAINT FK_contact_utilisateurID FOREIGN KEY (utilisateurID) REFERENCES utilisateur(utilisateurID);
ALTER TABLE formule ADD CONSTRAINT FK_formule_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
ALTER TABLE remarque ADD CONSTRAINT FK_remarque_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
ALTER TABLE remarque ADD CONSTRAINT FK_remarque_utilisateurID FOREIGN KEY (utilisateurID) REFERENCES utilisateur(utilisateurID);
ALTER TABLE image ADD CONSTRAINT FK_image_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
