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
function Carterie_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['cartes_commandes'] = 'cartes_commandes';

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
function Carterie_declarer_tables_objets_sql($tables) {

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
			'date'               => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_commande',
			'KEY statut'         => 'statut',
		),
		'titre' => 'nom AS titre, "" AS lang',
		'date' => 'date',
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

	return $tables;
}
