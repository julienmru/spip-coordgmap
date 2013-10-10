<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
function coordgmap_upgrade($nom_meta_base_version,$version_cible){
        $current_version = 0.0;
        if ((!isset($GLOBALS['meta'][$nom_meta_base_version]))
        || (($current_version = $GLOBALS['meta'][$nom_meta_base_version])!=$version_cible)){
                include_spip('base/coordgmap');
                // cas d'une installation
                if ($current_version==0.0){
                        include_spip('base/create');
                        maj_tables('spip_adresses');
                        ecrire_meta($nom_meta_base_version, $current_version=$version_cible, 'non');
                }
        }
}
function coordgmap_vider_tables($nom_meta_base_version) {
	sql_alter("TABLE spip_adresses DROP lat");
	sql_alter("TABLE spip_adresses DROP lng");
	effacer_meta($nom_meta_base_version);
}
?>