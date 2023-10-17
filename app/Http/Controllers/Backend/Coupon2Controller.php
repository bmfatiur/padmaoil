<?php

namespace App\Http\Controllers\Backend;

use App\Models\Coupon2;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\Coupon2StoreRequest;
use App\Http\Requests\Coupon2UpdateRequest;

class Coupon2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon2::latest('id')->paginate(10);
        return view('backend.pages.coupon2.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.coupon2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Coupon2StoreRequest $request)
    {
        Coupon2::create([
            'coupon_name' => $request->coupon_name,
            'amount' => $request->amount,
            'isActive' => $request->filled('isActive'),
        ]);

        Toastr::success('Data Stored Successfully!');
        return redirect()->route('coupon2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon2::find($id);
        return view('backend.pages.coupon2.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Coupon2UpdateRequest $request, $id)
    {
        $coupon = Coupon2::find($id);
        $coupon->update([
            'coupon_name' => $request->coupon_name,
            'discount_amount' => $request->discount_amount,
            'minimum_purchase_amount' => $request->minimum_purchase_amount,
            'validity_till' => $request->validity_till,
            'is_active' => $request->filled('is_active'),
        ]);

        Toastr::success('Data Updated Successfully!');
        return redirect()->route('coupon2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon2::find($id)->delete();
        Toastr::success('Data Deleted Successfully!');
        return redirect()->route('coupon2.index');
    }
}
