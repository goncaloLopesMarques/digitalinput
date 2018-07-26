<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function search()
  {
    $classes = "blog-search";
    $search = request('q');
    $posts = Post::search($search)->paginate(25);
    $mostRecentPosts = $this->mostRecentPosts();
   // dd($posts);
    return view('pages.blog',compact('posts','mostRecentPosts', 'classes'));
  }

  public function show(){

    $classes = "blog";
    $posts = Post::search('')->paginate(25);
    $mostRecentPosts = $this->mostRecentPosts();
    //dd($posts);
    return view('pages.blog',compact('posts','mostRecentPosts', 'classes'));
  }

  public function allPosts(){
    return Post::all();
  }

  public function mostRecentPosts(){
    $mostRecentPosts = json_decode($this->allPosts(),true);
    $arrayAux = array();
    foreach ($mostRecentPosts as $key => $row)
    {
      $arrayAux[$key] = $row['created_at'];
    }
    array_multisort($arrayAux, SORT_DESC, $mostRecentPosts);
    //ISTO È PARA IR BUSCAR SÒ OS 3 PRIMEIROS, aqui podemos escolher quantos posts queremos mostrar
    $mostRecentPosts = array_slice($mostRecentPosts, 0, 3);
    // ACABA AQUI A ORDENAÇÂO
    return $mostRecentPosts;
  }
}
