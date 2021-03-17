<?php
/**
 * Utilisation de l'action supprimer pour l'objet commande
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
 * Action pour supprimer un·e commande
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, commande, #ID_COMMANDE}|oui)
 *         [(#BOUTON_ACTION{<:commande:supprimer_commande:/>,
 *             #URL_ACTION_AUTEUR{supprimer_commande, #ID_COMMANDE, #URL_ECRIRE{cartes_commandes}},
 *             danger, <:commande:confirmer_supprimer_commande:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, commande, #ID_COMMANDE}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{commande-del-24.png}|balise_img{<:commande:supprimer_commande:/>}|concat{' ',#VAL{<:commande:supprimer_commande:/>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_commande, #ID_COMMANDE, #URL_ECRIRE{cartes_commandes}},
 *             icone s24 horizontale danger commande-del-24, <:commande:confirmer_supprimer_commande:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'commande', $id_commande)) {
 *          $supprimer_commande = charger_fonction('supprimer_commande', 'action');
 *          $supprimer_commande($id_commande);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_commande_dist($arg=null) {
	$need_confirm = false;
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
		$need_confirm = true;
	}
	$arg = intval($arg);

	if ($need_confirm){
		$ok = confirmer_supprimer_commande_avant_action(_T('commande:confirmer_supprimer_commande'), _T('item_oui') . '! ' . _T('commande:supprimer_commande'));
	}

	// cas suppression
	if (autoriser('supprimer', 'commande', $arg)) {
		if ($arg) {
			$objet = sql_fetsel('*', 'spip_cartes_commandes', 'id_commande=' . sql_quote($arg));
			$qui = (!empty($GLOBALS['visiteur_session']['id_auteur']) ? 'auteur #' . $GLOBALS['visiteur_session']['id_auteur'] : 'IP ' . $GLOBALS['ip']);
			spip_log("SUPPRESSION commande#$arg par $qui : " . json_encode($objet), "suppressions" . _LOG_INFO_IMPORTANTE);

			sql_delete('spip_cartes_commandes', 'id_commande=' . sql_quote($arg));

			// invalider le cache
			include_spip('inc/invalideur');
			suivre_invalideur("id='commande/$arg'");

		}
		else {
			spip_log("action_supprimer_commande_dist $arg pas compris");
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
function confirmer_supprimer_commande_avant_action($titre, $titre_bouton, $url_action=null) {

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
