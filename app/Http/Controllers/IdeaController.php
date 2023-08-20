<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index(){
        $ideas = Idea::all();
        return view ('ideas',compact('ideas'));

    }

    public function ideas()
    {
        $ideas = Idea::orderBy('description')->pluck('description')->toArray();
        //DD($ideas);
        return view ('autocomplete',compact('ideas'));

    }
}
