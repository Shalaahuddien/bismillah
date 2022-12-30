<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Food;

use App\Models\Cart;

class HomeController extends Controller
{
    //
   public function index()
   {

    $data=food::all();

    // dd($data);

    return view("home",compact("data"));
   }

   public function redirects()
   {

    $data=food::all();

    $usertype= Auth::user()->usertype;
    
    if($usertype==1)
    {
        return view('admin.adminhome');
    }

        else
        {
            $user_id = Auth::id();

            $count = cart::where('user_id',$user_id)->count();

            return view('home',compact('data','count'));
        }

   }

   public function addcart(Request $request,$id)
   {

    if(Auth::id())
    {
        $user_id = Auth::id();

        $foodid = $id;

        $quantity = $request->quantity;

        $cart = new cart;

        $cart->user_id=$user_id;

        $cart->food_id=$foodid;

        $cart->quantity=$quantity;

        $cart->save();

        // dd($user_id);

        return redirect()->back();
    }

    else
    {
        return redirect('/login');
    }

   }

}
