<?php

use Flight;

class GitHubController {

    public static function index() {
        return view('form.html');
    }

    public static function store() {
        $username = Flight::request()->data->username;

        // scores
        $score = 8;

        // save
        $newScore = Score::whereUsername($username)->first();

        if ($newScore) {
            $newScore->score = $score;
            $newScore->save();
        } else {
            Score::create([
                'username' => $username,
                'score'    => $score
            ]);
        }

        echo 'done!';
    }

    public static function ranking() {
        $ranking = Score::whereUsername('rodrigore')->get()->sortBy('score')->toJson();
        var_dump($ranking);
    }
}

