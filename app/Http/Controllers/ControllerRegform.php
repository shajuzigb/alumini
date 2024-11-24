<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newregistration;
use App\Models\MasterData;



class ControllerRegform extends Controller
{
  public  function  aluminReg()
  {

   // $var_dist_data = DB::table('master_datas')->where('parent', 1)->get();
   $var_dist_data = MasterData::select('id','parent','value')->where('parent',1)->get();
  return view('registration_page',compact('var_dist_data')); 
   //return view('registration_page'); 

  }

  public  function  nameInsert(Request $request)//$request is a variable
  {
   
   // dd($request);  dd is like echo 
  //  $var_obj=New Newregistration();
  //  $var_obj->name=$request->name; //fist name is database field name, last name is 
  //  $var_obj->username=$request->username;
  //  $var_obj->email=$request->email;
  //  $var_obj->phone=$request->phone;
  //  $var_obj->pass=$request->pass;
  //  $var_obj->confirmPass=$request->confirmPass;
  //  $var_obj->gender=$request->gender;
  //  $var_obj->save();
  //  return redirect('registrationform');

// $model = Newregistration::updateOrCreate(
//   ['name'=> $request->name],['email' => $request->email,'phone' => $request->phone
//      ]
// );
///$inserid=Newregistration::insertGetId();

$model = Newregistration::updateOrCreate(
  ['name' => $request->name],['username'=>$request->username,'email'=>$request->email,'phone' => $request->phone
    
]);
$insertid=$model->id;

$var = new Newregistration();
//return redirect('registrationform');

return view('registration_page',compact('var'));
}

public function  empList()
{
   $var_get_data=Newregistration::all();
  // return view('emp_list',compact('var_get_data'));

//$var_get_data = Newregistration::select('name','username','phone','email')->where('phone','5555')->get();
  return view('emp_list',compact('var_get_data'));

}

public function formEdit($id)
{
$var=Newregistration::find($id);
$var_dist_data = MasterData::select('id','parent','value')->where('parent',1)->get();
//dd($var);
//echo $nm;
return view('registration_page',compact('var','var_dist_data'));
}

public function formUpdate(Request $request,$id)
{
  $var=Newregistration::find($id);

  $data=['name'=>$request->name,
  'username'=>$request->username,
  'email'=>$request->email,
  'phone'=>$request->phone,
  'pass'=>$request->pass,
  'confirmPass'=>$request->confirmPass,
  'gender'=>$request->gender];

  $var->update($data);

  return redirect('/formList');
}


public function formdelete($id)
{
  $var=Newregistration::find($id);

 
  $var->delete();
  return redirect('/formList');



}



public function GetTaluk($id){

  $var_taluk_data=MasterData::select('id','value')->where('parent',$id)->orderBy('value','asc')->get();
return response()->json($var_taluk_data);

}
public function GetVillage($id2){

  $var_village_data=MasterData::select('id','value')->where('parent',$id2)->orderBy('value','asc')->get();
return response()->json($var_village_data);

}
///-----------------------------------------------------------------------------//






}
