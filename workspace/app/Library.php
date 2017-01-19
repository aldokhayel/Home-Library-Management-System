<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    //

    public function books(){
// then
        return $this->hasMany("App\book");
    }
}
