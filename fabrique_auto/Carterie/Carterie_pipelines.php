<?php
/**
 * Utilisations de pipelines par Carterie
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


/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */





/**
 * Optimiser la base de données
 *
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function Carterie_optimiser_base_disparus($flux) {

	sql_delete('spip_cartes_commandes', "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}
