<?php
/**
 * Plugin Coordonnées GoogleMap
 * (c) 2014 Julen Tessier,Mist. GraphX
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


function coordgmap_editer_contenu_objet($flux){
	if ($flux['args']['type'] == 'adresse') {
		$saisie = recuperer_fond('prive/coordgmap_editer', $flux['args']['contexte']);
		if ($saisie) {
			$flux['data'] = preg_replace('%(<!--extra-->)%is', '<ul>'.$saisie.'</ul>'."\n".'$1', $flux['data']);
		}
	}

	return $flux;
}


function coordgmap_pre_edition($flux){
	if ($flux['args']['type'] == 'adresse') {
		$flux['data']['lat'] = _request('lat');
		$flux['data']['lng'] = _request('lng');
	}
	return $flux;
}

function coordgmap_pre_insertion($flux){
	if ($flux['args']['type'] == 'adresse') {
		$flux['data']['lat'] = _request('lat');
		$flux['data']['lng'] = _request('lng');
	}
	return $flux;
}

?>