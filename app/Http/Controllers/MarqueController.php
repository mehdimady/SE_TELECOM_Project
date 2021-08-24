<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{

   public function addmarque(){
       return view('admin.addmarque');
   }
   public function marques(){
       $marques = Marque::All();
    return view('admin.marques')->with('marques',$marques);
}
public function savemarque(Request $request){
$this->validate($request,['marque_name' => 'required|unique:marques']);
$marque =new Marque();
$marque->marque_name =$request->input('marque_name');
$marque ->save();
return back()->with('status','La marque a été enregitrée avec succès');
}
public function edit_marque($id){
    $marque = Marque::find($id);
    return view('admin.editmarque')->with('marque', $marque);
}
public function updatemarque(Request $request){
    $this->validate($request,['marque_name' => 'required']);

    $marque= Marque::find($request->input('id'));
    $marque->marque_name = $request->input('marque_name');
    $marque->update();
    return redirect('/marque')->with('status', 'La marque a été modifiée avec succès');
}
public function delete_marque($id){
    $marque =Marque::find($id);
    $marque->delete();
    return back()->with('status', 'La marque a été supprimée avec succès');
    
}
}


