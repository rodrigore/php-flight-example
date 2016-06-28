<?php

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'username',
        'score'
    ];
}
