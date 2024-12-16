<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthServiceProvider;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\Reservation;

class AdminController extends Controller
{

   public function user(){

    $data=user::all();

   return view('admin/users',compact('data'));
  }


  public function userdelete($id){
    $data=user::find($id);
    $data->delete();
    return redirect()->back();
  }



  public function deletemenu($id){
    $data=food::find($id);
    $data->delete();
    return redirect()->back();
  }
  public function foodmenu(){


    $data=food::all();
 return view('admin.foodmenu',compact('data'));
  }



  public function upload(Request $request){
    //description
    $data= new Food;

    $image=$request->image;

    $imagename=time().'.'.$image->getClientOriginalExtension();
     $request->image->move('foodimage',$imagename);
     $data->image=$imagename;

     $data->title=$request->title;
     $data->price=$request->price;
     $data->description=$request->description;
     $data->save();
     return redirect()->back();
  }


public function updatemenu($id){
    $data=food::find($id);
    return view('admin.showupdate',compact('data'));
}


public function update($id,Request $request){

$data=food::find($id);

$image=$request->image;

if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('foodimage'), $imagename);
    $data->image = $imagename;
}
 $data->title=$request->title;
 $data->price=$request->price;
 $data->description=$request->description;
 $data->save();

 return redirect()->back();



}



public function reservation(Request $request){
    $data= new Reservation();

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
public function viewreservation(){


    $data=Reservation::all();
 return view('admin.adminreservation',compact('data'));
  }



  public function foodchef(Request $request){


    $data= new Foodchef();

    $image=$request->image;

    $imagename=time().'.'.$image->getClientOriginalExtension();
     $request->image->move('chefimage',$imagename);
     $data->image=$imagename;

     $data->name=$request->name;
     $data->speciality=$request->speciality;

     $data->save();
     return redirect()->back();
  }


  public function viewfoodchef(){


    $data=Foodchef::all();
 return view('admin.adminfoodchef',compact('data'));
  }


  public function deletechef($id){
    $data=Foodchef::find($id);
    $data->delete();
    return redirect()->back();
  }


  public function updatechefview($id){
    $data=Foodchef::find($id);
    return view('admin.updatechef',compact('data'));
}




      public function updatecf($id,Request $request){
    $data=foodchef::find($id);

    $image=$request->image;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('chefimage'), $imagename);
        $data->image = $imagename;
    }
     $data->name=$request->name;
     $data->speciality=$request->speciality;

     $data->save();

     return redirect()->back();














}
















}
