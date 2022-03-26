<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
public function profile()
{
     $user_id=Auth::user()->id;
     $user=User::find($user_id);
     $orders=Auth::user()->orders;
     $orders->transform(function($order,$key){
         $order->cart=unserialize($order->cart);
         return $order;
     });
    //  dd($orders);
    return view('profile',compact('user','orders'));
}



    public function update(Request $request)
    {
    $user_id=Auth::user();
    // $user=User::findOrFail($user_id);
    $user_id->name=$request->input('name');
    // $user_id->password=$request->input('password');
    // $user_id->tables->pivot->mobile_number=$request->input('mobile_number');
    // $user_id->password=$request->user()->fill([
    //     'password' => Hash::make($request->newPassword)
    // ])->save();
    if ($request->input('password')!=null){
          $user_id->password=$request->input('password');
$user_id->password = Hash::make($user_id['password']);

    }



    $user_id->update();
    $request->flash();
        session()->flash('success', 'Your profile updated successfully.');
    return redirect()->back()->with('status profile updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
