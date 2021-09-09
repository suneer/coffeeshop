<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;


class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view('admin.users',compact("data"));
    }
    public function userdelete($id)
    {
        $data=user::find($id);
      // $data= Auth::user();
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $data=food::all();
        return view('admin.foodmenu',compact("data"));
    }
    public function deletemenu($id)
    {
        $data=food::find($id);
       // return view('admin.foodmenu',compact("data"));
       $data->delete();
       return redirect()->back();
    }

    public function upload(Request $request)
    {
       $data=new Food();
      
        $image=$request->image;
        $imagefile=time().'.'.$image->getClientOriginalName();
        $request->image->move('foodupload', $imagefile);
        $data->image=$imagefile;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect('foodmenu');

       

    }
    public function uploadmenu()
    {
      

        return view('admin.uploadmenu');

    }
    public function reservation(Request $request)
    {
       $data=new Reservation();
      
       
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;

        $data->message=$request->message;
        $data->save();
        return redirect()->back();

       

    }


    public function updatemenu($id)
    {
      $data=food::find($id);

        return view('admin.updatemenu',compact("data"));

    }
    public function reservationview()
    {

      
       $data=reservation::all();
        return view('admin.reservationview',compact("data"));

    }
    public function deletereservation($id)
    {
        $data=reservation::find($id);
       // return view('admin.foodmenu',compact("data"));
       $data->delete();
       return redirect()->back();
    }
    public function foodchef()
    {

      $data=chef::all();

        return view('admin.adminchef',compact("data"));

    }
    public function uploadchefmenu(Request $request)
    {
       $data=new Chef();
      
        $image=$request->image;
        $imagefile=time().'.'.$image->getClientOriginalName();
        $request->image->move('chefupload', $imagefile);
        $data->image=$imagefile;
        $data->name=$request->name;
        $data->specialities=$request->specialities;
       
        $data->save();
        return redirect()->back();

       

    }
    public function deletechef($id)
    {
        $data=chef::find($id);
       // return view('admin.foodmenu',compact("data"));
       $data->delete();
       return redirect()->back();
    }
    public function uploadfoodchef()
    {
      

        return view('admin.uploadchef');

    }
    
    
}
