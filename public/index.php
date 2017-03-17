<?php
//
require dirname(dirname(__FILE__)).'/inc/config.php';

//Récupération de données ou autre
$headerH1 = 'TOTO accueil';


//à la fin TOUJOURS les vues
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/home.php';
include dirname(dirname(__FILE__)).'/view/footer.php';