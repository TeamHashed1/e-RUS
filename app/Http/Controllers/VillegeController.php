<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\villege;

class VillegeController extends Controller
{
	public function villegeinsert(Request $request){
$villege = new villege();
$villege->v_name = $request->v_name;
$villege ->save();

return \redirect('/villege');

}
public function viewvillege(){
$value = villege::all()->toArray();
return view("admin.allvillege",compact('value'));
}
public function deletevillege($id){

				$all_villege =villege::find($id);
				$all_villege->delete();
				$value = villege::all()->toArray();
				return redirect('/allvillege');


		}
}
