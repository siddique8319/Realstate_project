<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\FlatDiscount;
use Image;
class FlatDiscountController extends Controller
{
    public function storeDiscount(Request $request)
   {

       $strpos=strpos($request->image,';' );
       $sub=substr($request->image,0,$strpos);
       $ex=explode('/',$sub)[1];
       $name=time().".".$ex;
       $img=Image::make($request->image)->resize(200,200);
       $upload_path=public_path()."/images/";
       $img->save($upload_path.$name);
        $form= new FlatDiscount();
        $form->title= $request->title;
        $form->image=$name;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewDiscount()
    {
      return new PostCollection(FlatDiscount::orderby('id','desc')->get());
    }
    // public function viewOffer()
    // {
    //    $input=new PostCollection(FlatDiscount::orderby('id','desc')->where('user_role',Auth::user()->type)->where('status',0)->get());
    //     return view('index')->with('input',$input);
    // }
    public function deleteDiscount($id)
    {
      $post = FlatDiscount::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editDiscount($id)
    {
      $post =FlatDiscount::find($id);
      return response()->json($post);
    }

    public function updateDiscount($id, Request $request){
    $strpos=strpos($request->image,';' );
    $sub=substr($request->image,0,$strpos);
    $ex=explode('/',$sub)[1];
    $name=time().".".$ex;
    $img=Image::make($request->image)->resize(200,200);
    $upload_path=public_path()."/images/";
    $img->save($upload_path.$name);
     $form= FlatDiscount::find($id);
     $form->title= $request->title;
     $form->image=$name;
     $form->save();
    return response()->json('successfully added');
    }
}
