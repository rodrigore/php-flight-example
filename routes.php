<?php

Flight::route('GET /', ['GitHubController', 'index']);
Flight::route('POST /', ['GitHubController', 'store']);

Flight::start();
