<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\User;
class HomeController extends Controller
{
 public function index(){

    $data=food::all();
    $chef=Foodchef::all();

    return view('index',compact("data","chef"));
 }
 public function redirects(){
  $usertype=Auth::user()->usertype;
  $data=food::all();
  $chef=Foodchef::all();
 if($usertype=='1')
  {
    return view('admin/adminindex');
    }
   else{
    $user_id= auth::id();
$count=cart::where('user_id',$user_id)->count();


    return view('index',compact('data','chef','count'));
     }
 }


 // add cart


public function addcart(Request $request,$id){


    if(auth::id())
    {
       $user_id= auth::id();


       $foodid=$id;
       $quantity=$request->quantity;

       $cart=new cart;
         $cart->food_id=$foodid;
         $cart->user_id=$user_id;
         $cart->quantity=$quantity;
         $cart->save();


       return redirect()->back();
    }
    else{
        return redirect('login');
    }
}
public function showcart(Request $request,$id){


    $count=Cart::where('user_id',$id)->count();



$data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

return view('showcart',compact('count','data'));

}

public function remove($id){
    $data=cart::find($id);
    $data->delete();
    return redirect()->back();
}



}
