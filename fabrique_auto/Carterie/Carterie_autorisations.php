<?php
/**
 * Définit les autorisations du plugin Carterie
 *
 * @plugin     Carterie
 * @copyright  2021
 * @author     Malagnac
 * @licence    GNU/GPL
 * @package    SPIP\Carterie\Autorisations
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/*
 * Un fichier d'autorisations permet de regrouper
 * les fonctions d'autorisations de votre plugin
 */

/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function Carterie_autoriser() {
}


/* Exemple
function autoriser_Carterie_configurer_dist($faire, $type, $id, $qui, $opt) {
	// type est un objet (la plupart du temps) ou une chose.
	// autoriser('configurer', '_Carterie') => $type = 'Carterie'
	// au choix :
	return autoriser('webmestre', $type, $id, $qui, $opt); // seulement les webmestres
	return autoriser('configurer', '', $id, $qui, $opt); // seulement les administrateurs complets
	return $qui['statut'] == '0minirezo'; // seulement les administrateurs (même les restreints)
	// ...
}
*/

// -----------------
// Objet cartes_commandes


/**
 * Autorisation de voir un élément de menu (cartescommandes)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartescommandes_menu_dist($faire, $type, $id, $qui, $opt) {
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (commande)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_commandecreer_menu_dist($faire, $type, $id, $qui, $opt) {
	return autoriser('creer', 'commande', '', $qui, $opt);
}

/**
* Autorisation de voir (cartescommandes)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartescommandes_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
* Autorisation de voir (commande)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_commande_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
 * Autorisation de créer (commande)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_commande_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de modifier (commande)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_commande_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de supprimer (commande)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_commande_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' and !$qui['restreint'];
}
