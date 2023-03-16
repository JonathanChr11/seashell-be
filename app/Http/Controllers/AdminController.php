<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\FoodCategory;
use App\Models\promo;
use App\Models\timepromos;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $foodCategories = FoodCategory::all();
        $foodListMenu = food::all();
        $promoTime = timepromos::all()->first();
        $promoMenu = promo::all();

        for($i = 0; $i < count($promoMenu); $i++){
            $displayMenuPromo[] = food::where('id', $promoMenu[$i]->food_id)->first();
        }
        // dd($displayMenuPromo[0]->food_image);
        if(isset($displayMenuPromo)){
            return view('admin.admin-dashboard', [
                'categories' => $foodCategories,
                'foodListMenu' => $foodListMenu,
                'promoTime' => $promoTime,
                'displayMenuPromo' => $displayMenuPromo,
            ]);
        }else{
            return view('admin.admin-dashboard', [
                'categories' => $foodCategories,
                'foodListMenu' => $foodListMenu,
                'promoTime' => $promoTime,
            ]);
        }
    }
}
