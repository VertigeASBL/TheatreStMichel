<?php
/*
*   Balise #BILLETERIE_TELEPHONE
*/
function balise_BILLETTERIE_TELEPHONE_dist($p) {
    $p->code = "\$GLOBALS['meta']['billetterie_telephone']";
    return $p;
}

/*
*   Balise #BILLETERIE_EMAIL
*/
function balise_BILLETTERIE_EMAIL_dist($p) {
    $p->code = "\$GLOBALS['meta']['billetterie_email']";
    return $p;
}

?>