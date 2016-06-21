<?php

if (! function_exists('view')) {

    function view($template, $data = [])
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/views');

        $twig = new Twig_Environment($loader, []);

        echo $twig->render($template, $data);
    }
}
