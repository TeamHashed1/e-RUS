<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\word;
use App\villege;
use App\orga;
class WordController extends Controller
{
	public function wordinsert(Request $request){
$word = new word();
$word->w_number = $request->w_number;
$word->w_name = $request->w_name;
$word ->save();

return \redirect('/word');

}
public function viewword(){
$value = word::all()->toArray();

return view("admin.allword",compact('value'));
}
public function deleteword($id){

        $all_word =word::find($id);
        $all_word->delete();
        $value = word::all()->toArray();
        return redirect('/allword');


    }


		public function viewword1(){
			$value = word::all()->toArray();
			$value1 = villege::all()->toArray();
			$value2 = orga::all()->toArray();
			$value3 = orga::all()->toArray();
			return view('admin.info',compact('value','value1','value2', 'value3'));
		}
}
