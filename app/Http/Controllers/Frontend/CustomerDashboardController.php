<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Coupon2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Coupon2UpdateRequest;

class CustomerDashboardController extends Controller
{
    public function tokenApply(Request $request)
    {
        //dd($request->all());
        $user = Session::get('user');
        $token = Coupon2::where('coupon_name', $request->token_name)->first();

        // dd($token);
        // check coupon validity

        //if session got existing coupon, then don't allow double coupon
        if(!$token->isActive){
            Toastr::error('Already applied token!!!', 'Info!!!');
            return redirect()->back();
        }

        //deactivate isActive
        $coupon = Coupon2::find($token->id);
        $status = $coupon->isActive;
        $coupon->update([
            'isActive' => $request->filled('!$status'),
        ]);

        //if valid coupon found
        if($token !=null){
            // token amount
            $token_amount =  $token->amount;

            // calculate token value & balance update
            Session::put('user', [
                'balance' => $token->amount + $user['balance'],
                'email' => Session::get('user')['email'],
            ]);
            $mail = Session::get('user')['email'];
            $balance = Session::get('user')['balance'];
            $user = User::where('email', $mail)->first();
            if($user){
                $user->update([
                    'balance' => $balance,
                ]);
                Toastr::success('Token Applied!!', 'Successfully!!');
            }else{
                Toastr::error('Token Not Applied!!', 'Error');
            }
            return redirect()->back();
        }else{
            Toastr::error('Invalid Action/Token! Check');
            return redirect()->back();
        }
    }
}
