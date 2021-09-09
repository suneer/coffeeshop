<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        $data2=chef::all();
        $data=food::all();
        $userid=Auth::id();
            $count=cart::where('userid',$userid)->count();
        
        return view('home',compact("data","data2","count"));
    }

   
     public function redirects()
     {
        $data=food::all();
        $data2=chef::all();
        
        $usertype=Auth::user()->usertype;
        if($usertype==1){
            return view("admin.adminhome");
         }
         else{
            $userid=Auth::id();
            $count=cart::where('userid',$userid)->count();
             return view('home',compact('data','data2','count'));
         }
     

     }
     public function addcart(Request $request,$id)
    {
        if(Auth::id()){
            $userid=Auth::id();
            //dd($userid);
            $foodid=$id;
            $quantity=$request->quantity;
            $cart=new Cart();
            $cart->userid=$userid;
            $cart->foodid=$foodid;
            $cart->quantity=$quantity;
            $cart->save();
            

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
       
    }
    public function showcart(Request $request,$id)
    {
        //$userid=Auth::id();
         $count=cart::where('userid',$id)->count();
         $data2=cart::select('*')->where('userid', '=', $id)->get();
        $data=cart::where('userid',$id)->join('food', 'carts.foodid',  '=' ,'food.id')->get();
       
        return view('showcart',compact('count','data','data2'));
    }
    public function deletecart($id)
    {
        $data=Cart::find($id);
       // return view('admin.foodmenu',compact("data"));
       $data->delete();
       return redirect()->back();
    }

    
}
