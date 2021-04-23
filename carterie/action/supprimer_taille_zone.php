<?php
/**
 * Utilisation de l'action supprimer pour l'objet taille_zone
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
 * Action pour supprimer un·e taille_zone
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, taille_zone, #ID_TAILLE_ZONE}|oui)
 *         [(#BOUTON_ACTION{<:taille_zone:supprimer_taille_zone:/>,
 *             #URL_ACTION_AUTEUR{supprimer_taille_zone, #ID_TAILLE_ZONE, #URL_ECRIRE{cartes_tailles_zones}},
 *             danger, <:taille_zone:confirmer_supprimer_taille_zone:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, taille_zone, #ID_TAILLE_ZONE}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{taille_zone-del-24.png}|balise_img{<:taille_zone:supprimer_taille_zone:/>}|concat{' ',#VAL{<:taille_zone:supprimer_taille_zone:/>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_taille_zone, #ID_TAILLE_ZONE, #URL_ECRIRE{cartes_tailles_zones}},
 *             icone s24 horizontale danger taille_zone-del-24, <:taille_zone:confirmer_supprimer_taille_zone:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'taille_zone', $id_taille_zone)) {
 *          $supprimer_taille_zone = charger_fonction('supprimer_taille_zone', 'action');
 *          $supprimer_taille_zone($id_taille_zone);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_taille_zone_dist($arg=null) {
	$need_confirm = false;
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
		$need_confirm = true;
	}
	$arg = intval($arg);

	if ($need_confirm){
		$ok = confirmer_supprimer_taille_zone_avant_action(_T('taille_zone:confirmer_supprimer_taille_zone'), _T('item_oui') . '! ' . _T('taille_zone:supprimer_taille_zone'));
	}

	// cas suppression
	if (autoriser('supprimer', 'taille_zone', $arg)) {
		if ($arg) {
			$objet = sql_fetsel('*', 'spip_cartes_tailles_zones', 'id_taille_zone=' . sql_quote($arg));
			$qui = (!empty($GLOBALS['visiteur_session']['id_auteur']) ? 'auteur #' . $GLOBALS['visiteur_session']['id_auteur'] : 'IP ' . $GLOBALS['ip']);
			spip_log("SUPPRESSION taille_zone#$arg par $qui : " . json_encode($objet), "suppressions" . _LOG_INFO_IMPORTANTE);

			sql_delete('spip_cartes_tailles_zones', 'id_taille_zone=' . sql_quote($arg));

			// invalider le cache
			include_spip('inc/invalideur');
			suivre_invalideur("id='taille_zone/$arg'");

		}
		else {
			spip_log("action_supprimer_taille_zone_dist $arg pas compris");
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
function confirmer_supprimer_taille_zone_avant_action($titre, $titre_bouton, $url_action=null) {

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
