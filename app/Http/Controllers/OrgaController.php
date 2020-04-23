<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orga;

class OrgaController extends Controller
{
	public function orgainsert(Request $request){
$orga = new orga();
$orga->o_type = $request->o_type;
$orga->o_name = $request->o_name;
$orga ->save();

return \redirect('/orga');

}
public function vieworga(){
$value = orga::all()->toArray();
return view("admin.allorga",compact('value'));
}
public function deleteorga($id){

				$all_orga =orga::find($id);
				$all_orga->delete();
				$value = orga::all()->toArray();
				return redirect('/allorga');


		}
}
