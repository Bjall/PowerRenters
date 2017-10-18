#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE powerrenters;

USE powerrenters;


#------------------------------------------------------------
# Table: civilite (paramétrage)
#------------------------------------------------------------

CREATE TABLE civilite(
        cli_civ_id           int (11) Auto_increment  NOT NULL,
        cli_civ_libelle      Varchar (5) NOT NULL,
        cli_civ_denomination Varchar (15) NOT NULL,
        PRIMARY KEY (cli_civ_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        cli_id             int (11) Auto_increment  NOT NULL,
        cli_nom            Varchar (25) NOT NULL,
        cli_prenom         Varchar (25) NOT NULL,
        cli_date_naissance Date NOT NULL,
        cli_mdp            Varchar (25) NOT NULL,
        cli_mail           Varchar (40) NOT NULL,
        cli_permis_numero  Varchar (25),
        cli_stat_id        Int NOT NULL,
        cli_civ_id         Int NOT NULL,
        PRIMARY KEY (cli_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: statut_client (paramétrage)
#------------------------------------------------------------

CREATE TABLE statut_client(
        cli_stat_id      int (11) Auto_increment  NOT NULL,
        cli_stat_libelle Char (25) NOT NULL,
        cli_stat_taux    Float,
        PRIMARY KEY (cli_stat_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: categorie_veh (paramétrage)
#------------------------------------------------------------

CREATE TABLE categorie_veh(
        cat_id      int (11) Auto_increment  NOT NULL,
        cat_libelle Varchar (50) NOT NULL,
        PRIMARY KEY (cat_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: veh_boite (paramétrage)
#------------------------------------------------------------

CREATE TABLE veh_boite(
        veh_boite_id      int (11) Auto_increment  NOT NULL,
        veh_boite_libelle Varchar (50) NOT NULL,
        PRIMARY KEY (veh_boite_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: veh_porte (paramétrage)
#------------------------------------------------------------

CREATE TABLE veh_porte(
        veh_porte_id      int (11) Auto_increment  NOT NULL,
        veh_porte_libelle Int NOT NULL,
        PRIMARY KEY (veh_porte_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: veh_type_carburant (paramétrage)
#------------------------------------------------------------

CREATE TABLE veh_type_carburant(
        vehm_carb_id      int (11) Auto_increment  NOT NULL,
        vehm_carb_libelle Varchar (50) NOT NULL,
        PRIMARY KEY (vehm_carb_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: vehm_marque (paramétrage)
#------------------------------------------------------------

CREATE TABLE vehm_marque(
        vehmar_id      int (11) Auto_increment  NOT NULL,
        vehmar_libelle Varchar (25) NOT NULL,
        PRIMARY KEY (vehmar_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: vehm_modele (paramétrage)
#------------------------------------------------------------

CREATE TABLE vehm_modele(
        vehmmod_id      int (11) Auto_increment  NOT NULL,
        vehmmod_libelle Varchar (255) NOT NULL,
        vehmar_id       Int NOT NULL,
        PRIMARY KEY (vehmmod_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: veh_couleur (paramétrage)
#------------------------------------------------------------

CREATE TABLE veh_couleur(
        veh_coul_id      int (11) Auto_increment  NOT NULL,
        veh_coul_libelle Varchar (50) NOT NULL,
        PRIMARY KEY (veh_coul_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: vehicule
#------------------------------------------------------------

CREATE TABLE vehicule(
        veh_id         int (11) Auto_increment  NOT NULL,
        veh_date_achat Date NOT NULL,
        veh_photo      Varchar (255) NOT NULL,
        veh_nb_place   Int NOT NULL,
        veh_assur      Varchar (50) NOT NULL,
        veh_date_mec   Date,
        veh_kmage      Int,
        veh_ch_fisc    Int,
        veh_ch_reel    Int,
        veh_cyl        Int,
        type_veh_id    Int NOT NULL,
        veh_boite_id   Int,
        vehm_carb_id   Int,
        veh_coul_id    Int NOT NULL,
        vehmmod_id     Int NOT NULL,
        veh_porte_id   Int,
        typepermis_id  Int,
        PRIMARY KEY (veh_id )
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: accessoire (paramétrage)
#------------------------------------------------------------

CREATE TABLE accessoire(
        acc_id        int (11) Auto_increment  NOT NULL,
        acc_libelle   Varchar (50) NOT NULL,
        acc_prix_u_ht Float NOT NULL,
        PRIMARY KEY (acc_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: tva (paramétrage)
#------------------------------------------------------------

CREATE TABLE tva(
        tva_id   int (11) Auto_increment  NOT NULL,
        tva_taux Float NOT NULL,
        PRIMARY KEY (tva_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: contratdelocation
#------------------------------------------------------------

CREATE TABLE contratdelocation(
        contrat_id               int (11) Auto_increment  NOT NULL,
        contrat_date             Date,
        contrat_lieu             Varchar (20) NOT NULL,
        contrat_date_fin         Date NOT NULL,
        contrat_date_debut       Date NOT NULL,
        contrat_caution          Float,
        contrat_date_reservation Date,
        contrat_accompte         Float,
        cli_id                   Int NOT NULL,
        tva_id                   Int NOT NULL,
        veh_id                   Int NOT NULL,
        fac_id                   Int,
        forfait_id               Int NOT NULL,
        statut_cont_id           Int NOT NULL,
        PRIMARY KEY (contrat_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: type_veh (paramétrage)
#------------------------------------------------------------

CREATE TABLE type_veh(
        type_veh_id      int (11) Auto_increment  NOT NULL,
        type_veh_libelle Varchar (50) NOT NULL,
        type_veh_prix    Float NOT NULL,
        cat_id           Int NOT NULL,
        PRIMARY KEY (type_veh_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: type_permis (paramétrage)
#------------------------------------------------------------

CREATE TABLE type_permis(
        typepermis_id           int (11) Auto_increment  NOT NULL,
        typepermis_denomination Varchar (50) NOT NULL,
        typepermis_libelle      Varchar (10) NOT NULL,
        PRIMARY KEY (typepermis_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: etat_des_lieux
#------------------------------------------------------------

CREATE TABLE etat_des_lieux(
        etat_des_lieux_id          int (11) Auto_increment  NOT NULL,
        etat_des_lieux_commentaire Blob NOT NULL,
        etat_des_lieux_date        Date NOT NULL,
        pers_id                    Int NOT NULL,
        contrat_id                 Int NOT NULL,
        PRIMARY KEY (etat_des_lieux_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: personnel
#------------------------------------------------------------

CREATE TABLE personnel(
        pers_id     int (11) Auto_increment  NOT NULL,
        pers_nom    Varchar (25) NOT NULL,
        pers_prenom Varchar (25) NOT NULL,
        fonc_id     Int NOT NULL,
        PRIMARY KEY (pers_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: fonction (paramétrage)
#------------------------------------------------------------

CREATE TABLE fonction(
        fonc_id      int (11) Auto_increment  NOT NULL,
        fonc_libelle Varchar (25) NOT NULL,
        PRIMARY KEY (fonc_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: option_veh (paramétrage)
#------------------------------------------------------------

CREATE TABLE option_veh(
        option_veh_id      int (11) Auto_increment  NOT NULL,
        option_veh_libelle Varchar (50) NOT NULL,
        PRIMARY KEY (option_veh_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: cpville (paramétrage)
#------------------------------------------------------------

CREATE TABLE cpville(
        cp_id         int (11) Auto_increment  NOT NULL,
        cp_ville      Varchar (20) NOT NULL,
        cp_codepostal Varchar (10) NOT NULL,
        pays_id       Int NOT NULL,
        PRIMARY KEY (cp_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: option_contrat (paramétrage)
#------------------------------------------------------------

CREATE TABLE option_contrat(
        option_cont_id              int (11) Auto_increment  NOT NULL,
        option_cont_libelle         Varchar (30) NOT NULL,
        option_cont_prix_journalier Float NOT NULL,
        PRIMARY KEY (option_cont_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: facture
#------------------------------------------------------------

CREATE TABLE facture(
        fac_id      int (11) Auto_increment  NOT NULL,
        fac_montant Float NOT NULL,
        fac_date    Date NOT NULL,
        PRIMARY KEY (fac_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: statut_etat_des_lieux (paramétrage)
#------------------------------------------------------------

CREATE TABLE statut_etat_des_lieux(
        stat_etat_id      int (11) Auto_increment  NOT NULL,
        stat_etat_libelle Varchar (25) NOT NULL,
        PRIMARY KEY (stat_etat_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: entretien
#------------------------------------------------------------

CREATE TABLE entretien(
        entr_id             int (11) Auto_increment  NOT NULL,
        entr_libelle        Varchar (50) NOT NULL,
        entr_date           Date NOT NULL,
        stat_etat_id        Int NOT NULL,
        pers_id             Int NOT NULL,
        veh_id              Int NOT NULL,
        statut_entretien_id Int NOT NULL,
        PRIMARY KEY (entr_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: pays (paramétrage)
#------------------------------------------------------------

CREATE TABLE pays(
        pays_id      int (11) Auto_increment  NOT NULL,
        pays_libelle Varchar (15) NOT NULL,
        pays_code    Varchar (5) NOT NULL,
        PRIMARY KEY (pays_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: forfait (paramétrage)
#------------------------------------------------------------

CREATE TABLE forfait(
        forfait_id      int (11) Auto_increment  NOT NULL,
        forfait_libelle Varchar (40) NOT NULL,
        forfait_taux    Float NOT NULL,
        PRIMARY KEY (forfait_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: statut_contrat (paramétrage)
#------------------------------------------------------------

CREATE TABLE statut_contrat(
        statut_cont_id      int (11) Auto_increment  NOT NULL,
        statut_cont_libelle Varchar (25) NOT NULL,
        PRIMARY KEY (statut_cont_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: element_vehicule_etat (paramétrage)
#------------------------------------------------------------

CREATE TABLE element_vehicule_etat(
        element_id          int (11) Auto_increment  NOT NULL,
        element_libelle     Varchar (50) NOT NULL,
        element_coefficient Float NOT NULL,
        PRIMARY KEY (element_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: adresse
#------------------------------------------------------------

CREATE TABLE adresse(
        adresse_id  int (11) Auto_increment  NOT NULL,
        adresse_l1  Varchar (50) NOT NULL,
        adresse_l2  Varchar (50),
        adresse_l3  Varchar (50),
        cli_id      Int NOT NULL,
        type_adr_id Int NOT NULL,
        cp_id       Int NOT NULL,
        PRIMARY KEY (adresse_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: type_adresse (paramétrage)
#------------------------------------------------------------

CREATE TABLE type_adresse(
        type_adr_id      int (11) Auto_increment  NOT NULL,
        type_adr_libelle Varchar (20) NOT NULL,
        PRIMARY KEY (type_adr_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: penalites (paramétrage)
#------------------------------------------------------------

CREATE TABLE penalites(
        penalite_id      int (11) Auto_increment  NOT NULL,
        penalite_libelle Varchar (50) NOT NULL,
        penalite_forfait Float,
        penalite_coeff   Float,
        PRIMARY KEY (penalite_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: statut_entretien (paramétrage)
#------------------------------------------------------------

CREATE TABLE statut_entretien(
        statut_entretien_id      int (11) Auto_increment  NOT NULL,
        statut_entretien_libelle Varchar (50) NOT NULL,
        PRIMARY KEY (statut_entretien_id)
)ENGINE=InnoDB AUTO_INCREMENT=0;


#------------------------------------------------------------
# Table: detenir (relation)
#------------------------------------------------------------

CREATE TABLE detenir(
        date_permis   Date,
        cli_id        Int NOT NULL,
        typepermis_id Int NOT NULL,
        PRIMARY KEY (cli_id, typepermis_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rajouter (relation)
#------------------------------------------------------------

CREATE TABLE rajouter(
        acc_id     Int NOT NULL,
        contrat_id Int NOT NULL,
        PRIMARY KEY (acc_id, contrat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: disposer (relation)
#------------------------------------------------------------

CREATE TABLE disposer(
        option_veh_id Int NOT NULL,
        veh_id        Int NOT NULL,
        PRIMARY KEY (option_veh_id, veh_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ajouter (relation)
#------------------------------------------------------------

CREATE TABLE ajouter(
        contrat_id     Int NOT NULL,
        option_cont_id Int NOT NULL,
        PRIMARY KEY (contrat_id, option_cont_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sensuivre (relation)
#------------------------------------------------------------

CREATE TABLE sensuivre(
        stat_etat_id     Int NOT NULL,
        etat_des_lieux_id Int NOT NULL,
        element_id        Int NOT NULL,
        PRIMARY KEY (stat_etat_id, etat_des_lieux_id, element_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: penaliser (relation)
#------------------------------------------------------------

CREATE TABLE penaliser(
        contrat_id  Int NOT NULL,
        penalite_id Int NOT NULL,
        PRIMARY KEY (contrat_id, penalite_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Ajout des clés étrangères
#------------------------------------------------------------

ALTER TABLE client ADD CONSTRAINT FK_client_cli_stat_id FOREIGN KEY (cli_stat_id) REFERENCES statut_client(cli_stat_id);
ALTER TABLE client ADD CONSTRAINT FK_client_cli_civ_id FOREIGN KEY (cli_civ_id) REFERENCES civilite(cli_civ_id);
ALTER TABLE vehm_modele ADD CONSTRAINT FK_vehm_modele_vehmar_id FOREIGN KEY (vehmar_id) REFERENCES vehm_marque(vehmar_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_type_veh_id FOREIGN KEY (type_veh_id) REFERENCES type_veh(type_veh_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_veh_boite_id FOREIGN KEY (veh_boite_id) REFERENCES veh_boite(veh_boite_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_vehm_carb_id FOREIGN KEY (vehm_carb_id) REFERENCES veh_type_carburant(vehm_carb_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_veh_coul_id FOREIGN KEY (veh_coul_id) REFERENCES veh_couleur(veh_coul_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_vehmmod_id FOREIGN KEY (vehmmod_id) REFERENCES vehm_modele(vehmmod_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_veh_porte_id FOREIGN KEY (veh_porte_id) REFERENCES veh_porte(veh_porte_id);
ALTER TABLE vehicule ADD CONSTRAINT FK_Vehicule_typepermis_id FOREIGN KEY (typepermis_id) REFERENCES type_permis(typepermis_id);
ALTER TABLE contratdelocation ADD CONSTRAINT FK_contratdelocation_cli_id FOREIGN KEY (cli_id) REFERENCES client(cli_id);
ALTER TABLE contratdelocation ADD CONSTRAINT FK_contratdelocation_tva_id FOREIGN KEY (tva_id) REFERENCES tva(tva_id);
ALTER TABLE contratdelocation ADD CONSTRAINT FK_contratdelocation_veh_id FOREIGN KEY (veh_id) REFERENCES Vehicule(veh_id);
ALTER TABLE contratdelocation ADD CONSTRAINT FK_contratdelocation_fac_id FOREIGN KEY (fac_id) REFERENCES Facture(fac_id);
ALTER TABLE contratdelocation ADD CONSTRAINT FK_contratdelocation_forfait_id FOREIGN KEY (forfait_id) REFERENCES forfait(forfait_id);
ALTER TABLE contratdelocation ADD CONSTRAINT FK_contratdelocation_statut_cont_id FOREIGN KEY (statut_cont_id) REFERENCES statut_contrat(statut_cont_id);
ALTER TABLE type_veh ADD CONSTRAINT FK_type_veh_cat_id FOREIGN KEY (cat_id) REFERENCES categorie_veh(cat_id);
ALTER TABLE etat_des_lieux ADD CONSTRAINT FK_etat_des_lieux_pers_id FOREIGN KEY (pers_id) REFERENCES personnel(pers_id);
ALTER TABLE etat_des_lieux ADD CONSTRAINT FK_etat_des_lieux_contrat_id FOREIGN KEY (contrat_id) REFERENCES contratdelocation(contrat_id);
ALTER TABLE personnel ADD CONSTRAINT FK_personnel_fonc_id FOREIGN KEY (fonc_id) REFERENCES fonction(fonc_id);
ALTER TABLE cpville ADD CONSTRAINT FK_cpville_pays_id FOREIGN KEY (pays_id) REFERENCES Pays(pays_id);
ALTER TABLE entretien ADD CONSTRAINT FK_entretien_stat_etat_id FOREIGN KEY (stat_etat_id) REFERENCES statut_etat_des_lieux(stat_etat_id);
ALTER TABLE entretien ADD CONSTRAINT FK_entretien_pers_id FOREIGN KEY (pers_id) REFERENCES personnel(pers_id);
ALTER TABLE entretien ADD CONSTRAINT FK_entretien_veh_id FOREIGN KEY (veh_id) REFERENCES Vehicule(veh_id);
ALTER TABLE entretien ADD CONSTRAINT FK_entretien_statut_entretien_id FOREIGN KEY (statut_entretien_id) REFERENCES statut_entretien(statut_entretien_id);
ALTER TABLE adresse ADD CONSTRAINT FK_Adresse_cli_id FOREIGN KEY (cli_id) REFERENCES client(cli_id);
ALTER TABLE adresse ADD CONSTRAINT FK_Adresse_type_adr_id FOREIGN KEY (type_adr_id) REFERENCES Type_Adresse(type_adr_id);
ALTER TABLE adresse ADD CONSTRAINT FK_Adresse_cp_id FOREIGN KEY (cp_id) REFERENCES cpville(cp_id);
ALTER TABLE detenir ADD CONSTRAINT FK_detenir_cli_id FOREIGN KEY (cli_id) REFERENCES client(cli_id);
ALTER TABLE detenir ADD CONSTRAINT FK_detenir_typepermis_id FOREIGN KEY (typepermis_id) REFERENCES type_permis(typepermis_id);
ALTER TABLE rajouter ADD CONSTRAINT FK_rajouter_acc_id FOREIGN KEY (acc_id) REFERENCES accessoire(acc_id);
ALTER TABLE rajouter ADD CONSTRAINT FK_rajouter_contrat_id FOREIGN KEY (contrat_id) REFERENCES contratdelocation(contrat_id);
ALTER TABLE disposer ADD CONSTRAINT FK_disposer_option_veh_id FOREIGN KEY (option_veh_id) REFERENCES option_veh(option_veh_id);
ALTER TABLE disposer ADD CONSTRAINT FK_disposer_veh_id FOREIGN KEY (veh_id) REFERENCES Vehicule(veh_id);
ALTER TABLE ajouter ADD CONSTRAINT FK_ajouter_contrat_id FOREIGN KEY (contrat_id) REFERENCES contratdelocation(contrat_id);
ALTER TABLE ajouter ADD CONSTRAINT FK_ajouter_option_cont_id FOREIGN KEY (option_cont_id) REFERENCES option_contrat(option_cont_id);
ALTER TABLE sensuivre ADD CONSTRAINT FK_sensuivre_stat_etat_id FOREIGN KEY (stat_etat_id) REFERENCES statut_etat_des_lieux(stat_etat_id);
ALTER TABLE sensuivre ADD CONSTRAINT FK_sensuivre_etat_des_lieux_id FOREIGN KEY (etat_des_lieux_id) REFERENCES etat_des_lieux(etat_des_lieux_id);
ALTER TABLE sensuivre ADD CONSTRAINT FK_sensuivre_element_id FOREIGN KEY (element_id) REFERENCES element_vehicule_etat(element_id);
ALTER TABLE penaliser ADD CONSTRAINT FK_penaliser_contrat_id FOREIGN KEY (contrat_id) REFERENCES contratdelocation(contrat_id);
ALTER TABLE penaliser ADD CONSTRAINT FK_penaliser_penalite_id FOREIGN KEY (penalite_id) REFERENCES penalites(penalite_id);