<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
function coordgmap_declarer_tables_principales($tables_principales){
        // Extension de la table rubriques
        $tables_principales['spip_adresses']['field']['lat'] = "float DEFAULT 0 NOT NULL";     
        $tables_principales['spip_adresses']['field']['lng'] = "float DEFAULT 0 NOT NULL";     
        return $tables_principales;
}
?>
