<?php

require 'vendor/autoload.php';

// routes
Flight::route('GET /', function() {
    return view('form.html');
});

Flight::route('POST /', function () {
    $username = Flight::request()->data->username;

    if ($username) {
        echo "llamar a clase que calcula puntaje para username: {$username}";
    } else {
        return view('form.html', ['error' => true]);
    }

});

Flight::start();
