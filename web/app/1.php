<?php
function randomName() {
    $names = array(
        'Ayanthie',
        'Claudia',
        'Dilrangi',
        'Nimesha',
        'Satheera'
        // and so on

    );
    return $names[rand ( 0 , count($names) -1)];
}

print randomName();