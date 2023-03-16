<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function welcome(){
        $menu = food::all()->take(6);

        return view('welcome', [
            'menus' => $menu,
        ]);
    }

    public function index(){
        
        return view('cart');
    } 

    public function view(){
        $menu = food::all();

        return view('menu', [
            'menus' => $menu,
        ]);
    }

    public function search(Request $request){
        $search = $request->search;

        $menu = food::where('food_name','like',"%".$search."%")
		->paginate();
        $count = food::where('food_name','like',"%".$search."%")
		->count();
        if($count == 0){
            return view('menu', [
                'menus' => $menu,
            ])->with(['message' => 'Food not found']);
        }
        
        return view('menu', [
            'menus' => $menu,
        ]);
    }
}
