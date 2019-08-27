<?php

/**
 * Retrieves all users
 *
 * @return array|null
 */
function get_users(): ?array
{
    // dirname retourne le nom du répertoire d'un fichier
    // Ici, on veut un chemin absolu vers le fichier de données users
    // La constante __FILE__ nous donne le nom du fichier courant
    // Ici, il s'agit de users_functions.php
    // Donc le chargement de notre fichier data users
    // se fera toujours sur la même base, c'est-à-dire notre fichier courant
    // Et non le fichier appelant
    // On est donc indépendant sur l'appel de cette fonction
    require_once dirname(__FILE__) . "/../data/user/users.php";
    return $users;
}

/**
 * Authentication method
 *
 * @param string $username
 * @param string $password
 * @return string|null The username if auth ok, null otherwise
 */
function authenticate(string $username, string $password): ?string
{
    // Get all users
    $userData = get_users();

    foreach ($userData as $userItem) {
        if (
            $username == $userItem['username'] &&
            $password == $userItem['password']
        ) {
            return $username;
        }
    }

    return null;
}
