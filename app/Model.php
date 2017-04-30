<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // All array values are allowed for mass-assignment:
    // Ex: protected $fillable = ['title', 'body'];
    
    // All array values are disallowed for mass-assignment:
    // Ex: protected $guarded = ['user_id'];
    protected $guarded = [];
}