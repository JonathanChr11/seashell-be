<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\food;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FoodRequest $request)
    {
        $userId = auth()->user()->id;
        $image = $request->file('food_image');
        $food_name = $image->getClientOriginalName();
        do{ 
            $food_name = $userId . '_' . Str::random(10) . $food_name;
        }while(food::where('food_image', $food_name)->count() != 0);
        $food_image = $image->storeAs('public/menuImage', $food_name);
        $food_address = substr($food_image, strlen('public/'));
        Food::create([
            'food_name' => $request->food_name,
            'food_image' => $food_address,
            'food_price' => $request->food_price,
            'food_description' => $request->food_description,
            'food_category_id' => $request->menu_type
        ]);

        return redirect(route('dashboard.admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(FoodRequest $request, food $food, $mid)
    {
        $food = $food::where('id', $mid)->first();
        $unlink_file = $food->food_image;
        Storage::delete('/public/' . $unlink_file);

        $userId = auth()->user()->id;
        $image = $request->file('food_image');
        $food_name = $image->getClientOriginalName();
        do{ 
            $food_name = $userId . '_' . Str::random(10) . $food_name;
        }while(food::where('food_image', $food_name)->count() != 0);
        $food_image = $image->storeAs('public/menuImage', $food_name);
        $food_address = substr($food_image, strlen('public/'));
        $food->update([
            'food_name' => $request->food_name,
            'food_image' => $food_address,
            'food_price' => $request->food_price,
            'food_description' => $request->food_description,
            'food_category_id' => $request->menu_type
        ]);

        return redirect(route('dashboard.admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(food $food, $mid)
    {
        $food = $food::where('id', $mid)->first();
        $unlink_file = $food->food_image;
        Storage::delete('/public/' . $unlink_file);
        $food->delete();

        return redirect(route('dashboard.admin'));
    }
}
