<?php

namespace App\Http\Controllers;

use App\Models\Frameworks;
//use App\Http\Requests;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;


class SampleController extends Controller
{
    //
	public function model($type=null){
		// Frameworksモデルのインスタンス化
		$md = new Frameworks();
		// データ取得
		$data = $md->getData($type);
		$res  ="";

		// ビューを返す
		return view('sample.model', ['data' => $data ,'res' => $res]);
	}
	
	public function getIndex(){
		$md = new Frameworks();
		// データ取得
		$data = $md->getData($type);

		// ビューを返す
		return view('sample.model', ['data' => $data]);
	}
	
	public function postIndex(Request $request){
		$md = new Frameworks();
		$res = $request->input('str1');
		$data = $md->getData();
		// ビューを返す
		return view('sample.model', ['data' => $data ,'res' => $res ]);		
	}
	
	 public function SampleNotification()
  {
    $name = 'ララベル太郎';
    $text = 'これからもよろしくお願いいたします。';
    $to = 'ssmjtt30@gmail.com';
    Mail::to($to)->send(new SampleNotification($name, $text));
  }
	
	
}
