<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     Carterie
 * @copyright  2021
 * @author     Malagnac
 * @licence    GNU/GPL
 * @package    SPIP\Carterie\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function carterie_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['cartes_commandes'] = 'cartes_commandes';
	$interfaces['table_des_tables']['cartes_tailles_zones'] = 'cartes_tailles_zones';
	$interfaces['table_des_tables']['cartes_images'] = 'cartes_images';
	$interfaces['table_des_tables']['carte_modeles_textes'] = 'carte_modeles_textes';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function carterie_declarer_tables_objets_sql($tables) {

	$tables['spip_cartes_commandes'] = array(
		'type' => 'commande',
		'principale' => 'oui',
		'table_objet_surnoms' => array('cartescommande'), // table_objet('commande') => 'cartes_commandes' 
		'field'=> array(
			'id_commande'        => 'bigint(21) NOT NULL',
			'id_image'           => 'int(11) DEFAULT NULL',
			'texte1'             => 'mediumtext',
			'texte2'             => 'mediumtext',
			'texte3'             => 'mediumtext',
			'id_police'          => 'int(11) DEFAULT NULL',
			'extension'          => 'varchar(10) NOT NULL DEFAULT ""',
			'fichier'            => 'longblob NOT NULL',
			'nom'                => 'varchar(255) DEFAULT NULL',
			'adresse'            => 'varchar(255) DEFAULT NULL',
			'adresse_complement' => 'varchar(255) DEFAULT NULL',
			'code_postal'        => 'varchar(63) DEFAULT NULL',
			'ville'              => 'varchar(255) DEFAULT NULL',
			'email'              => 'varchar(511) DEFAULT NULL',
			'telephone'          => 'varchar(63) DEFAULT NULL',
			'fact_nom'           => 'varchar(255) DEFAULT NULL',
			'fact_societe'       => 'varchar(255) DEFAULT NULL',
			'fact_adresse'       => 'varchar(255) DEFAULT NULL',
			'fact_adresse_complement' => 'varchar(255) DEFAULT NULL',
			'fact_code_postal'   => 'varchar(63) DEFAULT NULL',
			'fact_ville'         => 'varchar(255) DEFAULT NULL',
			'quantite'           => 'int(11) DEFAULT NULL',
			'id_transaction'     => 'int(11) DEFAULT NULL',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_commande',
			'KEY statut'         => 'statut',
		),
		'titre' => 'nom AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array(),
		'champs_versionnes' => array(),
		'rechercher_champs' => array(),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'commande:texte_changer_statut_commande',


	);

	$tables['spip_cartes_tailles_zones'] = array(
		'type' => 'taille_zone',
		'principale' => 'oui',
		'table_objet_surnoms' => array('cartestailleszone'), // table_objet('taille_zone') => 'cartes_tailles_zones' 
		'field'=> array(
			'id_taille_zone'     => 'bigint(21) NOT NULL',
			'titre'              => 'varchar(127) DEFAULT NULL',
			'zone1_x'            => 'int(11) DEFAULT NULL',
			'zone1_y'            => 'int(11) DEFAULT NULL',
			'zone1_largeur'      => 'int(11) DEFAULT NULL',
			'zone1_hauteur'      => 'int(11) DEFAULT NULL',
			'zone2_x'            => 'int(11) DEFAULT NULL',
			'zone2_y'            => 'int(11) DEFAULT NULL',
			'zone2_largeur'      => 'int(11) DEFAULT NULL',
			'zone2_hauteur'      => 'int(11) DEFAULT NULL',
			'maj'                => 'TIMESTAMP NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_taille_zone',
		),
		'titre' => 'titre AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array('titre', 'zone1_x', 'zone1_y', 'zone1_largeur', 'zone1_hauteur', 'zone2_x', 'zone2_y', 'zone2_largeur', 'zone2_hauteur'),
		'champs_versionnes' => array('titre', 'zone1_x', 'zone1_y', 'zone1_largeur', 'zone1_hauteur', 'zone2_x', 'zone2_y', 'zone2_largeur', 'zone2_hauteur'),
		'rechercher_champs' => array("titre" => 1),
		'tables_jointures'  => array('spip_cartes_tailles_zones_liens'),


	);

	$tables['spip_cartes_images'] = array(
		'type' => 'image',
		'principale' => 'oui',
		'table_objet_surnoms' => array('cartesimage'), // table_objet('image') => 'cartes_images' 
		'field'=> array(
			'id_image'           => 'bigint(21) NOT NULL',
			'titre'              => 'varchar(25) NOT NULL DEFAULT ""',
			'chemin_image'       => 'varchar(25) NOT NULL DEFAULT ""',
			'maj'                => 'TIMESTAMP NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_image',
		),
		'titre' => 'titre AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array('titre', 'chemin_image'),
		'champs_versionnes' => array('titre', 'chemin_image'),
		'rechercher_champs' => array(),
		'tables_jointures'  => array(),


	);

	$tables['spip_carte_modeles_textes'] = array(
		'type' => 'carte_modeles_texte',
		'principale' => 'oui',
		'table_objet_surnoms' => array('cartemodelestexte'), // table_objet('carte_modeles_texte') => 'carte_modeles_textes' 
		'field'=> array(
			'id_carte_modeles_texte' => 'bigint(21) NOT NULL',
			'id_type_carte'      => 'int(11) NOT NULL DEFAULT 0',
			'titre'              => 'varchar(255) NOT NULL DEFAULT ""',
			'texte_modele'       => 'varchar(255) NOT NULL DEFAULT ""',
			'maj'                => 'TIMESTAMP NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_carte_modeles_texte',
		),
		'titre' => 'titre AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array('titre', 'texte_modele'),
		'champs_versionnes' => array('titre', 'texte_modele'),
		'rechercher_champs' => array(),
		'tables_jointures'  => array(),


	);

	return $tables;
}


/**
 * Déclaration des tables secondaires (liaisons)
 *
 * @pipeline declarer_tables_auxiliaires
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function carterie_declarer_tables_auxiliaires($tables) {

	$tables['spip_cartes_tailles_zones_liens'] = array(
		'field' => array(
			'id_taille_zone'     => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_taille_zone,id_objet,objet',
			'KEY id_taille_zone' => 'id_taille_zone',
		)
	);

	return $tables;
}
