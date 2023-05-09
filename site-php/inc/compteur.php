
<!-- COMPTEUR DE VISITE EN PHP -->

<?php
    $fichier = "compteur.txt";

    //si le fichier n’existe pas :

    if ( ! file_exists($fichier) ) {
        //on crée un fichier vide, la variable $data devient zéro :
        touch($fichier); 
        $data=0;

    } else {
        //le fichier existe, alors on stock son contenu sur $data :
        $data = file_get_contents($fichier);

        //si le contenu n’est pas nombre, alors $data devient zéro :
        if ( ! is_numeric($data) ) $data=0;
    }

    if(!isset($_SESSION['compteur'])){
        //on incrémente $data :
        $data++;
        $_SESSION['compteur'] = 'visité';
    }

    //on écris le contenu de $data dans le fichier :
    file_put_contents($fichier, $data);

    //on affiche le contenu de data :
    echo $data, " visites";

    echo '<br /> <a href="' . $_SERVER['PHP_SELF'] . '">Recharger</a>';
?>