<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\area;

class AreaController extends Controller
{
	public function areainsert(Request $request){
$area = new area();
$area->w_number = $request->w_number;
$area->w_name = $request->w_name;
$area->v_name = $request->v_name;
$area->o_name = $request->o_name;
$area ->save();

return \redirect('/addarea');

}
public function viewpage(){
$value = area::all()->toArray();
return view("admin.organization",compact('value'));
}

public function deletearea($id){

        $area_info =area::find($id);
        $area_info->delete();
        $value = area::all()->toArray();
        return redirect('/organization');


    }

}
