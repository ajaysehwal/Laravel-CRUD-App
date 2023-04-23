<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addusers;
class users extends Controller
{
    //
    function addData(Request $req){
        $user=new addusers;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->save();


return redirect('list');
    }
    
    
    function colldata(){
       $data=Addusers::all();
        return view('memberlist',['data'=>$data]);
   }

   function delete($id){
     $data=Addusers::find($id);
     $data->delete();
      return redirect('list');
   }
   function updatedata($id){
        $data=Addusers::find($id);
        return view('edit',['data1'=>$data]);
   }
   function update(Request $req){
      $data=Addusers::find($req->id);
      $data->name=$req->name;
      $data->email=$req->email;
      $data->address=$req->address;
      $data->save();
    return redirect('list');
   }
}
