<?php
/**
 * Utilisation de l'action supprimer pour l'objet carte_modeles_texte
 *
 * @plugin     Carterie
 * @copyright  2021
 * @author     Malagnac
 * @licence    GNU/GPL
 * @package    SPIP\Carterie\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}



/**
 * Action pour supprimer un·e carte_modeles_texte
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, carte_modeles_texte, #ID_CARTE_MODELES_TEXTE}|oui)
 *         [(#BOUTON_ACTION{<:carte_modeles_texte:supprimer_carte_modeles_texte:/>,
 *             #URL_ACTION_AUTEUR{supprimer_carte_modeles_texte, #ID_CARTE_MODELES_TEXTE, #URL_ECRIRE{carte_modeles_textes}},
 *             danger, <:carte_modeles_texte:confirmer_supprimer_carte_modeles_texte:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, carte_modeles_texte, #ID_CARTE_MODELES_TEXTE}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{carte_modeles_texte-del-24.png}|balise_img{<:carte_modeles_texte:supprimer_carte_modeles_texte:/>}|concat{' ',#VAL{<:carte_modeles_texte:supprimer_carte_modeles_texte:/>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_carte_modeles_texte, #ID_CARTE_MODELES_TEXTE, #URL_ECRIRE{carte_modeles_textes}},
 *             icone s24 horizontale danger carte_modeles_texte-del-24, <:carte_modeles_texte:confirmer_supprimer_carte_modeles_texte:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'carte_modeles_texte', $id_carte_modeles_texte)) {
 *          $supprimer_carte_modeles_texte = charger_fonction('supprimer_carte_modeles_texte', 'action');
 *          $supprimer_carte_modeles_texte($id_carte_modeles_texte);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_carte_modeles_texte_dist($arg=null) {
	$need_confirm = false;
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
		$need_confirm = true;
	}
	$arg = intval($arg);

	if ($need_confirm){
		$ok = confirmer_supprimer_carte_modeles_texte_avant_action(_T('carte_modeles_texte:confirmer_supprimer_carte_modeles_texte'), _T('item_oui') . '! ' . _T('carte_modeles_texte:supprimer_carte_modeles_texte'));
	}

	// cas suppression
	if (autoriser('supprimer', 'carte_modeles_texte', $arg)) {
		if ($arg) {
			$objet = sql_fetsel('*', 'spip_carte_modeles_textes', 'id_carte_modeles_texte=' . sql_quote($arg));
			$qui = (!empty($GLOBALS['visiteur_session']['id_auteur']) ? 'auteur #' . $GLOBALS['visiteur_session']['id_auteur'] : 'IP ' . $GLOBALS['ip']);
			spip_log("SUPPRESSION carte_modeles_texte#$arg par $qui : " . json_encode($objet), "suppressions" . _LOG_INFO_IMPORTANTE);

			sql_delete('spip_carte_modeles_textes', 'id_carte_modeles_texte=' . sql_quote($arg));

			// invalider le cache
			include_spip('inc/invalideur');
			suivre_invalideur("id='carte_modeles_texte/$arg'");

		}
		else {
			spip_log("action_supprimer_carte_modeles_texte_dist $arg pas compris");
		}
	}
}

/**
 * Confirmer avant suppression si on arrive par un bouton action
 * @param string $titre
 * @param string $titre_bouton
 * @param string|null $url_action
 * @return bool
 */
function confirmer_supprimer_carte_modeles_texte_avant_action($titre, $titre_bouton, $url_action=null) {

	if (!$url_action) {
		$url_action = self();
		$action = _request('action');
		$url_action = parametre_url($url_action, 'action', $action, '&');
	}
	else {
		$action = parametre_url($url_action, 'action');
	}
	$arg = parametre_url($url_action, 'arg');
	$confirm = md5("$action:$arg:".realpath(__FILE__));
	if (_request('confirm_action') === $confirm) {
		return true;
	}

	$url_confirm = parametre_url($url_action, "confirm_action", $confirm, '&');
	include_spip("inc/filtres");
	$bouton_action = bouton_action($titre_bouton, $url_confirm);
	$corps = "<div style='text-align:center;'>$bouton_action</div>";

	include_spip("inc/minipres");
	echo minipres($titre,$corps);
	exit;
}
