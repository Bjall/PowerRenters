#------------------------------------------------------------
# Insertion de données test
#------------------------------------------------------------

INSERT INTO statut_client(cli_stat_id, cli_stat_libelle, cli_stat_taux) VALUES
(1, 'Particulier', 1),
(2,'Professionnel', 0.90);

INSERT INTO civilite(cli_civ_id, cli_civ_libelle, cli_civ_denomination) VALUES
(1, 'Mme', 'Madame'),
(2, 'M', 'Monsieur');

INSERT INTO type_permis(typepermis_denomination, typepermis_libelle) VALUES
('Motocyclette légère', 'A1'),
('Motocyclette < 35kW', 'A2'),
('Motocyclette toute cylindrée', 'A'),
('Voiture', 'B'),
('Scooter et voiturette < 50cc', 'AM');

INSERT INTO type_adresse(type_adr_libelle) VALUES
('domicile'),
('siège social'),
('facturation');

INSERT INTO pays(pays_libelle, pays_code) VALUES
('FRANCE', 'FR'),
('ALLEMAGNE', 'DE'),
('ESPAGNE', 'ES'),
('ITALIE', 'IT'),
('BELGIQUE', 'BE'),
('ROYAUME-UNI', 'GB');

INSERT INTO cpville(cp_ville, cp_codepostal, pays_id) VALUES
('Les Sables-d''Olonne', '85100', 1),
('Strasbourg', '67000', 1),
('Paris', '75004', 1),
('Charvieu-Chavagneux', '38230', 1),
('Pornic', '44210', 1),
('Mortagne-sur-Gironde', '17120', 1),
('Amiens', '80000', 1),
('Tannay', '58190', 1),
('Joigny', '89300', 1),
('Paris', '75001', 1),
('Toulouse', '31000', 1),
('Mantry', '39230', 1);

INSERT INTO client(cli_nom, cli_prenom, cli_date_naissance, cli_mdp, cli_mail, cli_permis_numero, cli_stat_id, cli_civ_id) VALUES
('Delho', 'Nath', '1981-01-08','toto', 'nathdelho@gmail.com', '080933200162', 1,1),
('Jean','Pauline','1991-06-07','tata', 'pauljean@gmail.com','080933200163',1,1),
('Famille','Ben','1979-05-03','titi','benfamille@gmail.com','080933200164',1,2),
('Mend','Bene', '1996-06-01','tutu','benemend@gmail.com','080933200165',2,1),
('Sky','Lucas','1995-02-01','tete','lucassky@gmail.com','080933200166',2,2),
('Scott','Jason','1994-11-22','red','scott@yahoo.fr','080946984735',1,2),
('Hart','Kimberly','1993-05-06','yellow','kim.hart@wanadoo.fr','492546987652',2,1),
('Cranston','William','1995-03-21','blue','cransty.crunchy@gmail.com','080944284747',2,2),
('Kwan','Tini','1997-03-02','pink','kwakwakwa@hotmail.fr','768026987432',1,1),
('Taylor','Zackary','1984-11-11','black','blackisback@hotmail.fr','189526945322',2,2),
('Bambelle','Larry','1972-04-01','joke','lolguy@hotmail.fr','189521989530',2,2),
('Patamoto','Adhemar','1991-12-14','moto','vroum@gmail.com','187326987196',2,2);

INSERT INTO adresse(adresse_l1, adresse_l2, adresse_l3, cli_id, type_adr_id, cp_id) VALUES
('6 bis rue de l''Enfer', NULL, NULL, 1, 1, 1),
('78 rue des Pucelles', 'Appt. 5', NULL, 2, 3, 2),
('243 rue des Mauvais Garçons', 'Bâtiment B 2ème étage', 'Appt. 6', 3, 2, 3),
('29 ter rue de la Gerbe', NULL, NULL, 4, 2, 4),
('34 rue de la Dette', NULL, NULL, 5, 1, 5),
('19 rue des Merdes de Chiens', 'Appt. 2', NULL, 6, 1, 6),
('114 rue de la Queue de la Vache', NULL, NULL, 7, 3, 7),
('28 avenue de la Fringale', NULL, NULL, 8, 3, 8),
('2 bis chemin du Paradis', NULL, NULL, 9, 1, 9),
('7 rue de la Grande Truanderie', '6ème étage', NULL, 10, 2, 10),
('46 rue de la Verge d''Or', NULL, NULL, 11, 2, 11),
('Mauffans', 'rue du Cul du Putois', NULL, 12, 1, 12);

INSERT INTO detenir(cli_id, typepermis_id) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(5, 2),
(6, 1),
(6, 2),
(7, 2),
(8, 4),
(9, 4),
(10, 2),
(11, 3),
(12, 5);

INSERT INTO categorie_veh(cat_libelle) VALUES 
('Vélo'),
('Motos'),
('Voiture'),
('Utilitaire'),
('Van à chevaux');

INSERT INTO type_veh(type_veh_libelle, cat_id, type_veh_prix) VALUES
('moto_sportive', 2, 160),
('moto_routiere', 2, 140), 
('moto_trail', 2, 120), 
('moto_roadster', 2, 100),
('VTC', 1, 10),
('VTT', 1, 15),
('Tandem', 1, 20),
('Scooter',  2, 40),
('SUV',  3, 75),
('Berline', 3, 60),
('Citadine', 3, 40),
('Familiale', 3, 80),
('Sportive', 3, 120),
('Décapotable', 3, 140);

INSERT INTO veh_boite(veh_boite_libelle) VALUES
('Manuelle'), 
('Automatique');

INSERT INTO veh_type_carburant(vehm_carb_libelle) VALUES
('Essence'), 
('Gazole'), 
('GPL'), 
('Electrique'), 
('Hybride');

INSERT INTO veh_couleur(veh_coul_libelle) VALUES
('rouge'),
('bleu'),
('vert'),
('jaune'),
('marron'),
('noir'),
('blanc'),
('gris'),
('violet'),
('bordeaux'),
('noir/orange/blanc');

INSERT INTO vehm_marque(vehmar_libelle) VALUES
('Alfa Romeo'), 
('Audi'), 
('BMW'), 
('Citroën'), 
('Ferrari'), 
('Fiat'), 
('Ford'), 
('Honda'), 
('Jaguar'), 
('Mercedes'), 
('Mini'), 
('Peugeot'), 
('Renault'), 
('SEAT'), 
('Toyota'), 
('Wolkswagen'), 
('Volvo'),
('Suzuki');

INSERT INTO vehm_modele(vehmmod_libelle, vehmar_id) VALUES
('KA 2016 II 1.2 69 S&S BLACK EDITION', 7),
('CLIO 2013 IV 1.5 DCI 90 ENERGY DYNAMIQUE ECO2 90G', 13),
('C5 2016 II (2) 2.0 BLUEHDI 150 S&S CONFORT BV6 111Go', 4),
('STELVIO 2017 2.0 TURBO 200 Q4 LUSSO AT8', 1),
('CLASSE E 2017 IV (2) CABRIOLET 200 EXECUTIVE BVA7', 10),
('eC 01 D9', 12),
('750 GSX-R 2010', 18);

INSERT INTO veh_porte(veh_porte_libelle) VALUES 
(2),
(3),
(5);

INSERT INTO option_veh(option_veh_libelle) VALUES
('climatisation'),
('siege chauffant'),
('siege cuir'),
('volant chauffant'),
('poignee chauffante');

INSERT INTO vehicule(veh_date_achat, veh_photo, veh_nb_place, veh_assur, veh_date_mec, veh_kmage, veh_ch_fisc, veh_ch_reel, veh_cyl, type_veh_id, veh_boite_id, vehm_carb_id, veh_coul_id, vehmmod_id, veh_porte_id, typepermis_id) VALUES
('2017-03-19', '../images/photos/vehicule1.png', 4, 'F24415225555', '2017-03-19', 24630, 4, 90, 1242, 11, 1, 1, 8, 1, 1, 4),
('2016-11-10', '../images/photos/vehicule2.png', 5, 'F24414627653', '2016-11-10', 46527, 4, 90, 1461, 11, 1, 2, 1, 2, 2, 4),
('2016-08-23', '../images/photos/vehicule3.png', 5, 'F24417628652', '2016-08-23', 68426, 8, 150, 1997, 10, 1, 2, 2, 3, 3, 4),
('2017-01-21', '../images/photos/vehicule4.png', 5, 'F24484622983', '2017-01-21', 12378, 12, 200, 1995, 9, 1, 1, 5, 4, 3, 4),
('2017-03-19', '../images/photos/vehicule5.png', 5, 'F24417627612', '2017-03-19', 24630, 10, 184, 1242, 14, 2, 1, 10, 5, 1, 4),
('2017-03-19', '../images/photos/vehicule5.png', 5, 'F24417627618', '2017-03-19', 18657, 10, 184, 1242, 14, 2, 1, 4, 5, 1, 4),
('2015-09-13', '../images/photos/vehicule6.png', 1, 'F24415715223', NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, 2, 6, NULL, NULL),
('2016-09-28', '../images/photos/vehicule7.png', 2, 'F24415478188', '2016-09-28', 54826, 7, 150, 749, 1, 1, 1, 2, 7, NULL, 3);

INSERT INTO disposer(option_veh_id, veh_id) VALUES
(1, 2),
(1, 3),
(1, 4),
(3, 5);

INSERT INTO tva(tva_id, tva_taux) VALUES
(1, '19.6'), 
(2, '20');

INSERT INTO forfait(forfait_libelle, forfait_taux) VALUES
('Demi journée', 1.2),
('Un jour Hors Week-end', 1),
('Deux jours Hors Week-End', 0.94),
('Trois Jours Hors Week-End', 0.92),
('Semaine Hors Week-End', 0.88),
('Semaine Complète', 0.89),
('Week-End', 1.25),
('Mois', 0.75);

INSERT INTO facture(fac_montant, fac_date) VALUES
(200,'2017-10-17'),
(220,'2017-10-16'),
(250,'2017-09-15'),
(300,'2017-08-14'),
(2500,'2017-07-13');

INSERT INTO statut_contrat(statut_cont_libelle) VALUES
('non signé'),
('signé'),
('en attente'),
('cloturé');

INSERT INTO option_contrat(option_cont_libelle, option_cont_prix_journalier) VALUES
('conducteur supplémentaire', 8),
('rachat franchise ttc', 15);

INSERT INTO accessoire(acc_libelle, acc_prix_u_ht) VALUES
('Siège auto', 15), 
('Réhausseur', 10), 
('GPS', 5), 
('Casque vélo adulte', 5), 
('Casque moto', 30), 
('Casque vélo enfant', 2), 
('Gant moto', 15), 
('Blouson moto', 20), 
('Remorque vélo simple', 20), 
('Remorque vélo double', 30);

INSERT INTO contratdelocation(contrat_date, contrat_lieu, contrat_date_fin, contrat_date_debut, contrat_caution, contrat_date_reservation, cli_id, tva_id, veh_id, fac_id, forfait_id, contrat_accompte, statut_cont_id) VALUES
(NULL, 'Bordeaux', '2017-10-23', '2017-10-20', NULL, '2017-10-15', 1, 2, 1, NULL, 6, 220, 1),
('2017-09-20', 'Bordeaux', '2017-09-23', '2017-09-20', 200, NULL, 2, 2, 2, 1, 5, NULL, 3),
('2017-08-20', 'Bordeaux', '2017-08-23', '2017-08-20', NULL, '2017-08-20', 3, 2, 3, 2, 4, 400, 3),
('2017-10-10', 'Bordeaux', '2017-10-22', '2017-10-13', NULL, '2017-10-13', 4, 2, 4, NULL, 2, 400, 2);

INSERT INTO ajouter(contrat_id, option_cont_id) VALUES
(1, 1),
(1, 2),
(2, 1);

INSERT INTO rajouter(acc_id, contrat_id) VALUES
(1, 3),
(4, 3);

INSERT INTO fonction(fonc_libelle) VALUES 
('mécanicien'),
('gestionnaire');

INSERT INTO personnel(pers_nom, pers_prenom, fonc_id) VALUES
('Larry', 'Bambelle', 1),
('Ray', 'Defesse', 2),
('Jerry', 'Kan', 1),
('Bart', 'Tabac', 1);

INSERT INTO element_vehicule_etat(element_libelle, element_coefficient) VALUES
('RAS', 0),
('pneus', 1),
('aile', 5),
('rétroviseur', 0.1),
('pare-brise', 1),
('phare', 0.1);

INSERT INTO statut_etat_des_lieux (stat_etat_libelle) VALUES
('Non Fait'),
('Fait');

INSERT INTO etat_des_lieux(etat_des_lieux_commentaire, etat_des_lieux_date, pers_id, contrat_id) VALUES
('RAS', '2017-08-20', 4, 3),
('Rétroviseur AVG cassé, Phare AVG', '2017-08-23', 3, 3),
('RAS', '2017-09-20', 1, 2),
('Réservoir vide', '2017-09-23', 1, 2),
('RAS', '2017-10-13', 3, 4);

INSERT INTO sensuivre(stat_etat_id, etat_des_lieux_id, element_id) VALUES
(2, 1, 1),
(2, 2, 3),
(2, 2, 4),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1);

INSERT INTO statut_entretien(statut_entretien_libelle) VALUES
('fait'),
('non fait'),
('en cours');

INSERT INTO entretien(entr_libelle, entr_date, stat_etat_id, pers_id, veh_id, statut_entretien_id) VALUES
('nettoyage', '2017-10-17', 2, 2, 1, 1),
('vidange', '2017-09-12', 2, 1, 2, 1),
('changement ampoule', '2017-10-16', 2, 3, 3, 2),
('changement essuis glace', '2017-10-15', 2, 4, 3, 1),
('préparation', '2017-03-20', 2, 1, 1, 1),
('préparation', '2017-03-20', 2, 1, 2, 1),
('préparation', '2017-03-20', 2, 1, 3, 1),
('préparation', '2017-03-20', 2, 1, 4, 1),
('préparation', '2017-03-20', 2, 1, 5, 1),
('préparation', '2017-03-20', 2, 1, 6, 1),
('préparation', '2017-03-20', 2, 1, 7, 1);

INSERT INTO penalites(penalite_libelle, penalite_forfait, penalite_coeff) VALUES
('jours de retard', NULL, 2),
('plein complet non fait', 100, NULL),
('annulation de la resa avant 7 jours', NULL, 0.2),
('contravention', 50, NULL);

INSERT INTO penaliser(contrat_id, penalite_id) VALUES
(2, 2);