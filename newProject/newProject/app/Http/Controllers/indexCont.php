<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kitap;
use App\Models\turu;
use App\Models\yayınevi;
use App\Models\yazar;

class indexCont extends Controller
{

public function getIndex(Request $request){
    return view('index');
}
public function getKitap(Request $request){
    $yazar= yazar::all();
    return view('kitap',compact('yazar'));
  
}
public function getEkran(Request $request){
    $kitap = kitap::orderby('id', 'DESC')->get();
    return view('ekran' ,compact('kitap'));
}
public function postEkran(Request $request){
    $kitap= new Kitap();
    $kitap->create($request->all());
    return redirect()->route('site.getEkran'); 

} 
public function getTur(Request $request){
    $yayınevi=yayınevi::all();
    return view('tur' , compact('yayınevi'));

}
public function getturE(Request $request){
    $tur= turu::orderby('id','DESC')->get();
    return view('turE', compact('tur'));
}
public function postturE(Request $request){
    $tur= new Turu();
    $tur->create($request->all());
    return redirect()->route('site.getturE');

} 
public function getYayın(Request $request){
    return view('yayın');
}
public function getyayınE(Request $request){
    $yayın= yayınevi::orderby('id','DESC')->get();
    return view('yayınE',compact('yayın')); 

}
public function postyayınE(Request $request){
    $yayın=new yayınevi();
    $yayın->create($request->all());
    return redirect()->route('site.getyayınE');
}
public function getYazar(Request $request){
    return view('yazar');

}
public function getyazarE(Request $request){
   $yazar=yazar::orderby('id','DESC')->get();
   return view('yazarE',compact('yazar'));

}
public function postyazarE(Request $request){
    $yazar= new yazar();
    $yazar->create($request->all());
    return redirect()->route('site.getyazarE');


}

}
