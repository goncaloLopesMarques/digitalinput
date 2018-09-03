<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Projeto extends Model
{
   public function portfolio_categories()
    {
        return $this->belongsToMany('App\Portfolio_category');
    }
}
