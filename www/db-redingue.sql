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
        evenementID     int (11) Auto_increment  NOT NULL ,
        t_nom_evenement Varchar (255) ,
        remarqueID      Int ,
        PRIMARY KEY (evenementID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: inscrire
#------------------------------------------------------------

CREATE TABLE inscrire(
        utilisateurID Int NOT NULL ,
        evenementID   Int NOT NULL ,
        PRIMARY KEY (utilisateurID ,evenementID )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: choisir-formule
#------------------------------------------------------------

CREATE TABLE choisir_formule(
        evenementID Int NOT NULL ,
        formuleID   Int NOT NULL ,
        PRIMARY KEY (evenementID ,formuleID )
)ENGINE=InnoDB;

ALTER TABLE contact ADD CONSTRAINT FK_contact_utilisateurID FOREIGN KEY (utilisateurID) REFERENCES utilisateur(utilisateurID);
ALTER TABLE remarque ADD CONSTRAINT FK_remarque_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
ALTER TABLE remarque ADD CONSTRAINT FK_remarque_utilisateurID FOREIGN KEY (utilisateurID) REFERENCES utilisateur(utilisateurID);
ALTER TABLE evenement ADD CONSTRAINT FK_evenement_remarqueID FOREIGN KEY (remarqueID) REFERENCES remarque(remarqueID);
ALTER TABLE inscrire ADD CONSTRAINT FK_inscrire_utilisateurID FOREIGN KEY (utilisateurID) REFERENCES utilisateur(utilisateurID);
ALTER TABLE inscrire ADD CONSTRAINT FK_inscrire_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
ALTER TABLE choisir_formule ADD CONSTRAINT FK_choisir_formule_evenementID FOREIGN KEY (evenementID) REFERENCES evenement(evenementID);
ALTER TABLE choisir_formule ADD CONSTRAINT FK_choisir_formule_formuleID FOREIGN KEY (formuleID) REFERENCES formule(formuleID);
