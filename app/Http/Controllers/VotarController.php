<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\votar;

class VotarController extends Controller
{
  public function votarinsert(Request $request){
$votar = new votar();
$votar->v_name = $request->v_name;
$votar->v_phone = $request->v_phone;
$votar->f_name = $request->f_name;
$votar->m_name = $request->m_name;
$votar->nob = $request->nob;
$votar->nos = $request->nos;
$votar->merri = $request->merri;
$votar->age = $request->age;
$votar->hof = $request->hof;
$votar->freedom = $request->freedom;
$votar->address = $request->address;
$votar->blood = $request->blood;
$votar->p_price = $request->p_price;
$votar ->save();

return \redirect('/votar');

}
public function viewvotar(){
$value = votar::all()->toArray();
return view("admin.allvotar",compact('value'));
}

public function freedom(){
$value = votar::where('freedom', 'Yes')->get();
return view("admin.freedom",compact('value'));
}

public function cardholder(){
$value = votar::where('p_price', '<=', 50000)->get();
return view("admin.cardholder",compact('value'));
}
public function cardview($id){
  $value = votar::find($id);
  return view("admin.rationcard",compact('value'));
}
}
