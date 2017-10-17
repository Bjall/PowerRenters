#------------------------------------------------------------
# Insertion de données test
#------------------------------------------------------------

INSERT INTO statut_client(cli_stat_id, cli_stat_libelle, cli_stat_taux) VALUES
(1, 'Particulier', 1),
(2,'Professionnel', 0.90);

INSERT INTO civilite (cli_civ_id, cli_civ_libelle, cli_civ_denomination) VALUES
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
('France', 'FR');

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