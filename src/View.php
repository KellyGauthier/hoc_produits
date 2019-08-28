<?php

class View
{
    /**
     * Render a Template.
     * 
     * @param string $filePath Path to the template
     * @param array|null $viewData Array containing any data needed (can be null or empty array)
     * @return string - The processed content
     * 
     */
    public static function render($filePath, $viewData = null)
    {

        // Was any data sent through?
        ($viewData) ? extract($viewData) : null;

        ob_start();
        include($filePath);
        $template = ob_get_contents();
        ob_end_clean();

        return $template;
    }
}
