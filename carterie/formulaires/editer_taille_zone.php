<?php
/**
 * Gestion du formulaire de d'édition de taille_zone
 *
 * @plugin     Carterie
 * @copyright  2021
 * @author     Malagnac
 * @licence    GNU/GPL
 * @package    SPIP\Carterie\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('inc/actions');
include_spip('inc/editer');



/**
 * Identifier le formulaire en faisant abstraction des paramètres qui ne représentent pas l'objet edité
 *
 * @param int|string $id_taille_zone
 *     Identifiant du taille_zone. 'new' pour un nouveau taille_zone.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le taille_zone créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un taille_zone source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du taille_zone, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return string
 *     Hash du formulaire
 */
function formulaires_editer_taille_zone_identifier_dist($id_taille_zone = 'new', $retour = '', $associer_objet = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	return serialize(array(intval($id_taille_zone), $associer_objet));
}

/**
 * Chargement du formulaire d'édition de taille_zone
 *
 * Déclarer les champs postés et y intégrer les valeurs par défaut
 *
 * @uses formulaires_editer_objet_charger()
 *
 * @param int|string $id_taille_zone
 *     Identifiant du taille_zone. 'new' pour un nouveau taille_zone.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le taille_zone créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un taille_zone source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du taille_zone, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Environnement du formulaire
 */
function formulaires_editer_taille_zone_charger_dist($id_taille_zone = 'new', $retour = '', $associer_objet = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$valeurs = formulaires_editer_objet_charger('taille_zone', $id_taille_zone, '', $lier_trad, $retour, $config_fonc, $row, $hidden);

	return $valeurs;
}

/**
 * Vérifications du formulaire d'édition de taille_zone
 *
 * Vérifier les champs postés et signaler d'éventuelles erreurs
 *
 * @uses formulaires_editer_objet_verifier()
 *
 * @param int|string $id_taille_zone
 *     Identifiant du taille_zone. 'new' pour un nouveau taille_zone.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le taille_zone créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un taille_zone source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du taille_zone, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Tableau des erreurs
 */
function formulaires_editer_taille_zone_verifier_dist($id_taille_zone = 'new', $retour = '', $associer_objet = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {

	$erreurs = formulaires_editer_objet_verifier('taille_zone', $id_taille_zone, array('titre', 'zone1_x'));


	return $erreurs;
}

/**
 * Traitement du formulaire d'édition de taille_zone
 *
 * Traiter les champs postés
 *
 * @uses formulaires_editer_objet_traiter()
 *
 * @param int|string $id_taille_zone
 *     Identifiant du taille_zone. 'new' pour un nouveau taille_zone.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le taille_zone créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un taille_zone source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du taille_zone, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Retours des traitements
 */
function formulaires_editer_taille_zone_traiter_dist($id_taille_zone = 'new', $retour = '', $associer_objet = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$retours = formulaires_editer_objet_traiter('taille_zone', $id_taille_zone, '', $lier_trad, $retour, $config_fonc, $row, $hidden);

	// Un lien a prendre en compte ?
	if ($associer_objet and $id_taille_zone = $retours['id_taille_zone']) {
		list($objet, $id_objet) = explode('|', $associer_objet);

		if ($objet and $id_objet and autoriser('modifier', $objet, $id_objet)) {
			include_spip('action/editer_liens');
			
			objet_associer(array('taille_zone' => $id_taille_zone), array($objet => $id_objet));
			
			if (isset($retours['redirect'])) {
				$retours['redirect'] = parametre_url($retours['redirect'], 'id_lien_ajoute', $id_taille_zone, '&');
			}
		}
	}

	return $retours;
}
