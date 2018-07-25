<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
  public function show()
  {
    $search = request('q');

    Post::search($search);
  }
}
