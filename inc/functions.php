<?php
function get_menu() {
    $array =array(
        
        array('Accueil','house','index'),

        array('Agenda', 'calendar','#',
        // level 2
            array(
                'Agenda Ateliers', 
                'Gestion Session', 
                'VSI Prog.', 
                'VSI modules à la carte', 
                'ACL Atelier obligatoire'
        )),

        array('Bénéficiaires','users','#',
        // level 2

            array(
                'Rechercher',
                'Ajouter'
            )),
        array('Gestion','gear','gestion'),
        array('Outils','list-check','outils',
        // level 2
            array(
                'Forum', 
                'Recherche de CV VSI'
            )
        )
    );
    
    return $array;
}