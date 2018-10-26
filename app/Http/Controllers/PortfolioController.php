<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio_category;
use App\Projeto;

class PortfolioController extends Controller
{
    function portfolio(){
        $classes = "portfolio my-background-2";
        $categories = Portfolio_category::get()->all();
        $projetos = Projeto::get()->all();
        return view('pages.portfolio', compact('classes', 'categories', 'projetos'));
    }
    function project($slug){
    	$classes = "portfolio-project my-background";
    	$project = Projeto::where('slug', '=', $slug)->firstOrFail();
    	return view('pages.project', compact('classes', 'project'));
    }
}
