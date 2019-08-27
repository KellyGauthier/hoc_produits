<?php
/**
 * Utilitary class
 */
class Utils
{
    /**
     * Performs a redirection to a specified location
     *
     * @param string $location The URL destination
     * @return void
     */
    public static function redirect (string $location): void {
    header('Location: ' .$location);
    die;
}

}
