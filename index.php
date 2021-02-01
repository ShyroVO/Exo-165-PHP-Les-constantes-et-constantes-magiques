<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante,
 * le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
define('nb1', 12);
define('nb2', 2);
echo (nb1 * nb2);
echo '<br><br>';

define('phraseNul', "Blabla");

echo ((nb1 + nb2) * strlen(phraseNul));

/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un
 * maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.
