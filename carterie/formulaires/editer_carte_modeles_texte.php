<?php
/**
 * Gestion du formulaire de d'édition de carte_modeles_texte
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
 * @param int|string $id_carte_modeles_texte
 *     Identifiant du carte_modeles_texte. 'new' pour un nouveau carte_modeles_texte.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un carte_modeles_texte source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du carte_modeles_texte, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return string
 *     Hash du formulaire
 */
function formulaires_editer_carte_modeles_texte_identifier_dist($id_carte_modeles_texte = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	return serialize(array(intval($id_carte_modeles_texte)));
}

/**
 * Chargement du formulaire d'édition de carte_modeles_texte
 *
 * Déclarer les champs postés et y intégrer les valeurs par défaut
 *
 * @uses formulaires_editer_objet_charger()
 *
 * @param int|string $id_carte_modeles_texte
 *     Identifiant du carte_modeles_texte. 'new' pour un nouveau carte_modeles_texte.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un carte_modeles_texte source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du carte_modeles_texte, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Environnement du formulaire
 */
function formulaires_editer_carte_modeles_texte_charger_dist($id_carte_modeles_texte = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$valeurs = formulaires_editer_objet_charger('carte_modeles_texte', $id_carte_modeles_texte, '', $lier_trad, $retour, $config_fonc, $row, $hidden);

	return $valeurs;
}

/**
 * Vérifications du formulaire d'édition de carte_modeles_texte
 *
 * Vérifier les champs postés et signaler d'éventuelles erreurs
 *
 * @uses formulaires_editer_objet_verifier()
 *
 * @param int|string $id_carte_modeles_texte
 *     Identifiant du carte_modeles_texte. 'new' pour un nouveau carte_modeles_texte.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un carte_modeles_texte source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du carte_modeles_texte, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Tableau des erreurs
 */
function formulaires_editer_carte_modeles_texte_verifier_dist($id_carte_modeles_texte = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {

	$erreurs = formulaires_editer_objet_verifier('carte_modeles_texte', $id_carte_modeles_texte, array('titre'));


	return $erreurs;
}

/**
 * Traitement du formulaire d'édition de carte_modeles_texte
 *
 * Traiter les champs postés
 *
 * @uses formulaires_editer_objet_traiter()
 *
 * @param int|string $id_carte_modeles_texte
 *     Identifiant du carte_modeles_texte. 'new' pour un nouveau carte_modeles_texte.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un carte_modeles_texte source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du carte_modeles_texte, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Retours des traitements
 */
function formulaires_editer_carte_modeles_texte_traiter_dist($id_carte_modeles_texte = 'new', $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$retours = formulaires_editer_objet_traiter('carte_modeles_texte', $id_carte_modeles_texte, '', $lier_trad, $retour, $config_fonc, $row, $hidden);
	return $retours;
}
