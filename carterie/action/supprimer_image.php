<?php
/**
 * Utilisation de l'action supprimer pour l'objet image
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
 * Action pour supprimer un·e image
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, image, #ID_IMAGE}|oui)
 *         [(#BOUTON_ACTION{<:image:supprimer_image:/>,
 *             #URL_ACTION_AUTEUR{supprimer_image, #ID_IMAGE, #URL_ECRIRE{cartes_images}},
 *             danger, <:image:confirmer_supprimer_image:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, image, #ID_IMAGE}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{image-del-24.png}|balise_img{<:image:supprimer_image:/>}|concat{' ',#VAL{<:image:supprimer_image:/>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_image, #ID_IMAGE, #URL_ECRIRE{cartes_images}},
 *             icone s24 horizontale danger image-del-24, <:image:confirmer_supprimer_image:/>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'image', $id_image)) {
 *          $supprimer_image = charger_fonction('supprimer_image', 'action');
 *          $supprimer_image($id_image);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_image_dist($arg=null) {
	$need_confirm = false;
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
		$need_confirm = true;
	}
	$arg = intval($arg);

	if ($need_confirm){
		$ok = confirmer_supprimer_image_avant_action(_T('image:confirmer_supprimer_image'), _T('item_oui') . '! ' . _T('image:supprimer_image'));
	}

	// cas suppression
	if (autoriser('supprimer', 'image', $arg)) {
		if ($arg) {
			$objet = sql_fetsel('*', 'spip_cartes_images', 'id_image=' . sql_quote($arg));
			$qui = (!empty($GLOBALS['visiteur_session']['id_auteur']) ? 'auteur #' . $GLOBALS['visiteur_session']['id_auteur'] : 'IP ' . $GLOBALS['ip']);
			spip_log("SUPPRESSION image#$arg par $qui : " . json_encode($objet), "suppressions" . _LOG_INFO_IMPORTANTE);

			sql_delete('spip_cartes_images', 'id_image=' . sql_quote($arg));

			// invalider le cache
			include_spip('inc/invalideur');
			suivre_invalideur("id='image/$arg'");

		}
		else {
			spip_log("action_supprimer_image_dist $arg pas compris");
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
function confirmer_supprimer_image_avant_action($titre, $titre_bouton, $url_action=null) {

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
