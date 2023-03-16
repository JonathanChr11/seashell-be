<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoupontRequest;
use App\Models\Couponts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CoupontController extends Controller
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
    public function create(CoupontRequest $request)
    {
        Couponts::create([
            'coupont_code' => strtoupper($request->coupont_code),
            'discount' => $request->discount,
            'expired_at' => $request->expired_at,
        ]);

        return redirect(route('dashboard'));
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
     * @param  \App\Models\coupont  $coupont
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $checkdate = Couponts::all();
        $thisDay = Carbon::now();
        for($i = 0, $j = 0; $i < count($checkdate); $i++){
            if($thisDay > $checkdate[$i]->expired_at){
                Couponts::where('expired_at', $checkdate[$i]->expired_at)->delete();
            }
        }
        dd($checkdate);
        //return view(coupont)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coupont  $coupont
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coupont  $coupont
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coupont  $coupont
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
