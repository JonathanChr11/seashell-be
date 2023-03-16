<?php

namespace App\Http\Controllers;

use App\Models\promo;
use App\Models\food;
use App\Models\timepromos;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTimePromo(Request $request)
    {
        $time = timepromos::all()->first();
        if($time){
            $time->update([
                'end_promo' => $request->end_promo,
                'created_at' => now()
            ]);
            // ->fill($request->all())->save();
        }else{
            timepromos::create([
                'end_promo' => $request->end_promo,
                'created_at' => now(),
            ]);
        }

        return redirect(route('dashboard.admin'))->with([
            'success' => 'Success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(timepromos::all()->count() < 1){
            return back()->withErrors('Add time promo first!!');
        }
        else if(food::where('id', $request->menu_type)->count() < 1){
            return back()->withErrors('Menu yang dimasukan salah');
        }
        else if(promo::where('food_id', $request->menu_type)->count() > 0){
            return back()->withErrors('Menu Sudah ada');
        }
        else{
            $end_promo = timepromos::all()->first()->id;
            promo::create([
                'food_id' => $request->menu_type,
                'end_promo_id' => $end_promo,
            ]);
        }

        return redirect(route('dashboard.admin'))->with([
            'Success' => 'Success'
        ]);
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
     * @param  \App\Models\promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, promo $promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(promo $promo)
    {
        //
    }
}
