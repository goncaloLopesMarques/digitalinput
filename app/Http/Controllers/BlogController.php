<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function search()
  {
    $classes = "blog-search";
    $search = request('q');
    $posts = Post::search($search)->paginate(9);
    
    $mostRecentPosts = $this->mostRecentPosts();

    foreach ($posts as $post){
      $post["image"] = \Voyager::image($post["image"]);
    } 
    // dd($posts);
    return view('pages.blog',compact('posts','mostRecentPosts', 'classes'));
  }
  public function post($slug){
    $post = Post::where('slug', '=', $slug)->firstOrFail();
    $data =Carbon::parse($post->created_at)->format('d/m/Y');
    $category = Category::Where('id','=',$post->category_id)->firstOrFail();
    $avatar = User::Where('name','=',$post->author)->firstOrFail();
    return view('layout.post', compact('post','category','avatar','data'));
  }

  public function show(){

    $classes = "blog";
    $posts = Post::search('')->paginate(9);
    $mostRecentPosts = $this->mostRecentPosts();
   
    foreach ($posts as $post){
      $post["image"] = \Voyager::image($post["image"]);
    } 
    //dd($mostRecentPosts);
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
      $mostRecentPosts[$key]["image"] = \Voyager::image($mostRecentPosts[$key]["image"]);
      $arrayAux[$key] = $row['created_at'];
    }
    array_multisort($arrayAux, SORT_DESC, $mostRecentPosts);
    //ISTO È PARA IR BUSCAR SÒ OS 3 PRIMEIROS, aqui podemos escolher quantos posts queremos mostrar
    $mostRecentPosts = array_slice($mostRecentPosts, 0, 3);
    // ACABA AQUI A ORDENAÇÂO
  
    return $mostRecentPosts;
  }
}
