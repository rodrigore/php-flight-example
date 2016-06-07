<?php

if (! function_exists('view')) {
    function view($template, array $data = [])
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

        $twig = new Twig_Environment($loader, []);

        echo $twig->render($template, $data);
    }
}

