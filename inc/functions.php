<?php
function get_menu() {
    $array =array(
        array('Accueil','house','index'),
        array('Agenda', 'calendar','agenda'),
        array('Bénéficiaires','users','beneficiaires'),
        array('Gestion','gear','gestion'),
        array('Outils','list-check','outils')
    );
    return $array;
}