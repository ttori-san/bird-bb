<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LetterRequest;

use App\Letter;

class LetterController extends Controller
{
    public function index()
    {
    $letters = Letter::all()->sortByDesc('created_at');
    return view('letters.index',['letters'=> $letters]);
    }

    public function create(Letter $letter)
    {
      return view('letters.create');
    }
    public function store(LetterRequest $request, Letter $letter)
    {
      $letter->name = $request->name;
      $letter->place = $request->place;
      $letter->comment = $request->comment;
      $letter->user_id = $request->user()->id;

      if(isset($request->date))
      {
        $request->date = strtotime($request->date);//timestamp取得
        $letter->created_at = $request->date;
      }else{

      }

    
      if(isset($request->letter_image))
      {
        $image = $request->letter_image;
        $letter_image_path = $image -> store('public/images');//パスを生成しつつ、画像データを下のpublicに保存。魔法のような一文。storeメソッドの返り値はパスであるから、このような処理が可能。
        
        $letter_image_name = basename($letter_image_path);//パスからファイル名を取得


        $letter->file_path = $letter_image_path;//ファイルのパスをDBに格納
        $letter->file_name = $letter_image_name;//ファイルの名前をDBに格納
      }
      else
      {
        $letter->file_path = "";
        $letter->file_name = "";
      }
      $letter->save();
      return redirect()->route('articles.index');
    }
}
