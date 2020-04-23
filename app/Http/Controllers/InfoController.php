<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
use DB;
use App\word;
use App\villege;
use App\orga;
class InfoController extends Controller
{
  public function infoinsert(Request $request){
$info = new info();
$info->w_name = $request->w_name;
$info->v_name = $request->v_name;
$info->o_type = $request->o_type;
$info->o_name = $request->o_name;
$info->details = $request->details;
$info ->save();

return \redirect('/info');

}
public function viewpage(){
$value = info::all()->toArray();
return view("admin.organization",compact('value'));
}


public function infodetails($id){

        $details =info::find($id);
        return view("admin.info_details",compact("details"));

    }

    public function search(Request $request){

      $word=$request->input('word');
      $villege=$request->input('villege');
      $o_type=$request->input('o_type');


      $value = DB::table('infos')
                ->where('w_name', 'like', $word)
                ->Where ('v_name', 'like', $villege)
                ->Where ('o_type', 'like', $o_type)
                ->get();
                return view ('viewwelcome', compact("value"));

        }


public function deletearea($id){

        $area_info =info::find($id);
        $area_info->delete();
        $value = info::all()->toArray();
        return redirect('/organization');


    }

    public function infod(){
			$value = word::all()->toArray();
      $value1 = villege::all()->toArray();
      $value2 = orga::all()->toArray();

			return view('welcome',compact('value','value1', 'value2'));
		}
}
