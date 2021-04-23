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
 * Ajout de contenu sur certaines pages,
 * notamment des formulaires de liaisons entre objets
 *
 * @pipeline affiche_milieu
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function carterie_affiche_milieu($flux) {
	$texte = '';
	$e = trouver_objet_exec($flux['args']['exec']);



	// cartes_tailles_zones sur les documents
	if (
		$e
		and !$e['edition']
		and in_array($e['type'], array('document'))
	) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'cartes_tailles_zones',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}

	if ($texte) {
		if ($p = strpos($flux['data'], '<!--affiche_milieu-->')) {
			$flux['data'] = substr_replace($flux['data'], $texte, $p, 0);
		} else {
			$flux['data'] .= $texte;
		}
	}

	return $flux;
}




/**
 * Optimiser la base de données
 *
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function carterie_optimiser_base_disparus($flux) {

	include_spip('action/editer_liens');
	$flux['data'] += objet_optimiser_liens(array('taille_zone'=>'*'), '*');

	sql_delete('spip_cartes_commandes', "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}
