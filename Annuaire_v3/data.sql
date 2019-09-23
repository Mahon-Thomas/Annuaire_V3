/* 
* La table des employés identifie chaque employé par un numéro d'employé et répertorie les informations de base sur le personnel. 
* La table photos des employés contient une photo de chaque employé identifiée par un numéro d'employé.
* La table des services décrit chaque service de l'entreprise et identifie son responsable.
* Un service a beaucoup d'employés. Un employé peut appartenir à différents services à des dates différentes et éventuellement simultanément.
* Rejoindre la table à soutenir entre plusieurs relations entre employees et les departments . Même structure que dept_emp .
*
* Table de département (DEPARTEMENT
* La table des départements décrit chaque département de l'entreprise et identifie son responsable et le département concerné.
*
* Table des employés 
* La table des employés identifie chaque employé par un numéro d'employé et répertorie les informations de base sur le personnel.
* 
* Tableau de photos d'employé (EMP_PHOTO)
* La table de photos des employés contient une photo de chaque employé identifiée par un numéro d'employé.
*/ 

DROP TABLE IF EXISTS `tbl_employe`;
CREATE TABLE `tbl_employe` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_datenais` date NOT NULL,
  `emp_nom` varchar(50) NOT NULL,
  `emp_pnom` varchar(50) NOT NULL,
  `emp_genre` enum('M','F') NOT NULL,
  `emp_dateemb` date NOT NULL,
  `emp_email` varchar(25) NOT NULL,
  `emp_tel` varchar(10) DEFAULT NULL,
  `emp_PhotoPath` varchar(255) DEFAULT NULL,
  `emp_photo` blob,
  PRIMARY KEY (`emp_id`),
  KEY `emp_nom` (`emp_nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tbl_equipe`;
CREATE TABLE `tbl_equipe` (
  `eqp_id` int(1) NOT NULL,
  `eqp_nom` varchar(64) NOT NULL,
  `eqp_promo` int(2) NOT NULL,
  PRIMARY KEY (`eqp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tbl_equipe_employe`;
CREATE TABLE `tbl_equipe_employe` (
  `id_equipe` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `date_affectation_equipe` date NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_employe`),
  KEY `FK_tbl_equipe_employe_tbl_employe` (`id_employe`),
  CONSTRAINT `FK_tbl_equipe_employe_tbl_employe` FOREIGN KEY (`id_employe`) REFERENCES `tbl_employe` (`emp_id`),
  CONSTRAINT `FK_tbl_equipe_employe_tbl_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `tbl_equipe` (`eqp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;