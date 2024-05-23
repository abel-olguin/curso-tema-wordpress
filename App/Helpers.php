<?php

namespace Abolch\App;

class Helpers
{
    public static function view($view, $params = [])
    {
        echo self::getView($view, $params);
    }

    public static function getView(string $view, array $params = [])
    {
        ob_start();
        get_template_part("views/parts/{$view}", null, $params);
        $content = ob_get_contents();
        ob_clean();

        return $content;
    }
}