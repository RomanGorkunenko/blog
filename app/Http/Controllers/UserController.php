<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class UserController extends Controller
{
    //
    /**
     * 
     * @param type $id
     * @return type
     */  
    public function show($id=20)
  {
        return view('welcome', ['id'=>$id]);
  }
  //  public function store()
  //{
   //     return $request->file('image');
  //}
  /**
   * 
   * @param Request $request
   * @return type
   */  
  public function form(Request $request)
    {
        $fio = $request['fio'];
        $email = $request['email'];
        $phone = $request['phone'];
        $card = $request['card'];
        $commens = $request['commens'];
        $genre = $request['genre'];
        $sex = $request['sex'];
        $days = $request['days'];
        $image = $request->file('image');
        $upload = './uploads';
        $filename = $image->getClientOriginalName();
        $img = Image::make($image)->resize(200, 200);
        $img->save($upload.'/'.$filename);
        $this->validate($request, [
            'fio'=> 'required|min:10',
            'email' => 'required|email',
            'image' => 'mimes:jpeg,bmp,png',
            'phone'=> 'required|numeric|min:10',
            'card'=> 'nullable|numeric',
            'genre'=> 'required',
            'sex'=> 'required',
        ]);
        return view('pages', ['fio'=>$fio, 'email'=>$email, 'phone'=>$phone, 'card'=>$card, 'commens'=>$commens, 'genre'=>$genre, 'sex'=>$sex, 'days'=>$days, 'filename'=>$filename]);
    }
}
