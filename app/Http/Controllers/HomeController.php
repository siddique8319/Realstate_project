<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\PermissionMenu;
use App\PermissionSubMenu;
use Auth;
use App\FlatDiscount;
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
    {   $show=new PostCollection(FlatDiscount::orderby('id','desc')->limit(3)->get());
        $input=new PostCollection(PermissionMenu::orderby('id','desc')->where('user_role',Auth::user()->type)->where('status',0)->get());
        return view('index')->with('input',$input)->with('show',$show);
       
    }
     public function viewP()
    {
      return new PostCollection(PermissionSubMenu::orderby('id','desc')->where('menu',1)->get());
    }
    
}
