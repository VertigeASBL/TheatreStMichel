<?php
/*
*   Balise #BILLETERIE_TELEPHONE
*/
function balise_BILLETERIE_TELEPHONE_dist($p) {
    $p->code = "\$GLOBALS['meta']['billeterie_telephone']";
    return $p;
}


?>