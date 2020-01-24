<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\FixSallary;
class FixSallaryController extends Controller
{
    public function storeSallary(Request $request)
    {
        $form= new FixSallary();
        $form->info= $request->info;
        $form->sallary= $request->sallary;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewSallary()
    {
      return new PostCollection(FixSallary::orderby('id','desc')->get());
    }
    public function deleteSallary($id)
    {
      $post = FixSallary::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editSallary($id)
    {
      $post =FixSallary::find($id);
      return response()->json($post);
    }

    public function updateSallary($id, Request $request)
    {
      $form = FixSallary::find($id);  
      $form->info= $request->info;    
      $form->sallary= $request->sallary;
      $form->save();
      return response()->json('successfully updated');
    }
}
