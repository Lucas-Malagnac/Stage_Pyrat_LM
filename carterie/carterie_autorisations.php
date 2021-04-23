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
function carterie_autoriser() {
}


/* Exemple
function autoriser_carterie_configurer_dist($faire, $type, $id, $qui, $opt) {
	// type est un objet (la plupart du temps) ou une chose.
	// autoriser('configurer', '_carterie') => $type = 'carterie'
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


// -----------------
// Objet cartes_tailles_zones


/**
 * Autorisation de voir un élément de menu (cartestailleszones)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartestailleszones_menu_dist($faire, $type, $id, $qui, $opt) {
	return true;
}


/**
* Autorisation de voir (cartestailleszones)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartestailleszones_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
* Autorisation de voir (taillezone)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_taillezone_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
 * Autorisation de créer (taillezone)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_taillezone_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de modifier (taillezone)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_taillezone_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de supprimer (taillezone)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_taillezone_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' and !$qui['restreint'];
}



/**
 * Autorisation de lier/délier l'élément (cartestailleszones)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_associercartestailleszones_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' and !$qui['restreint'];
}// -----------------
// Objet cartes_images


/**
 * Autorisation de voir un élément de menu (cartesimages)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartesimages_menu_dist($faire, $type, $id, $qui, $opt) {
	return true;
}


/**
* Autorisation de voir (cartesimages)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartesimages_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
* Autorisation de voir (image)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_image_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
 * Autorisation de créer (image)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_image_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de modifier (image)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_image_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de supprimer (image)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_image_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' and !$qui['restreint'];
}


// -----------------
// Objet carte_modeles_textes


/**
 * Autorisation de voir un élément de menu (cartemodelestextes)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestextes_menu_dist($faire, $type, $id, $qui, $opt) {
	return true;
}


/**
 * Autorisation de voir le bouton d'accès rapide de création (cartemodelestexte)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestextecreer_menu_dist($faire, $type, $id, $qui, $opt) {
	return autoriser('creer', 'carte_modeles_texte', '', $qui, $opt);
}

/**
* Autorisation de voir (cartemodelestextes)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestextes_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
* Autorisation de voir (cartemodelestexte)
*
* @param  string $faire Action demandée
* @param  string $type  Type d'objet sur lequel appliquer l'action
* @param  int    $id    Identifiant de l'objet
* @param  array  $qui   Description de l'auteur demandant l'autorisation
* @param  array  $opt   Options de cette autorisation
* @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestexte_voir_dist($faire, $type, $id, $qui, $opt) {
	return true;
}

/**
 * Autorisation de créer (cartemodelestexte)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestexte_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de modifier (cartemodelestexte)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestexte_modifier_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de supprimer (cartemodelestexte)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cartemodelestexte_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return $qui['statut'] == '0minirezo' and !$qui['restreint'];
}
