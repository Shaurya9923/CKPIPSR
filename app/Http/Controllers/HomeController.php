<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Event;
use App\Achievement;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $count1=Faculty::count();
        $count2=Event::count();
        $count3=Achievement::count();
        $count4=News::count();
        return view('home',compact('count1','count2','count3','count4'));
    }
    public function count()
    {
        $count=Faculty::count();
    }
}
