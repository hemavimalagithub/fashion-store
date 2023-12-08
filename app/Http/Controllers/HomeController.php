<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;



class HomeController extends Controller
{

    public function index(){
        $product = product::all();
        return view('home.userpage',compact('product'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1'){

            return view('admin.home');
        }
        else{
            return view('home.userpage');
        }
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        return view('home.product_details' , compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=Auth::user();

            $product = product::find($id);
            $cart = new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->user_id;

            $cart->description=$product->description;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quantity=$request->quantity;
            $cart->discount_price=$product->discount_price;

            $cart->save();

            return redirect()->back();





        }else
        {
            return redirect('login');
        }

    }
}
