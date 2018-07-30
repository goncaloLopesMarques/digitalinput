<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
      use Searchable;
public function author()
{
      return $this->belongsTo(User::class);
}
public function category()
{
      return $this->belongsTo(Category::class);
}
}
