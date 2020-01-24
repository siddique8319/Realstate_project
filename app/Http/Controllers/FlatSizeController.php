<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\FlatSize;
class FlatSizeController extends Controller
{
    public function storeFlatSize(Request $request)
    {     $this->validate($request, [
      'flat_size' => 'required |unique:flat_sizes',
        
     ]);
        $form= new FlatSize();

        $form->floor_no= $request->floor_no;
        $form->house_no= $request->house_no;
        $form->flat_no= $request->flat_no;
        $form->flat_size= $request->flat_size;
         $form->save();
         return response()->json('successfully added');
    }
    public function viewFlatSize()
    {
      return new PostCollection(FlatSize::orderby('id','desc')->get());
    }
    public function deleteFlatSize($id)
    {
      $post = FlatSize::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editFlatSize($id)
    {
      $post = FlatSize::find($id);
      return response()->json($post);
    }

    public function updateFlatSize($id, Request $request)
    {
      $form = FlatSize::find($id);
       
      $form->floor_no= $request->floor_no;
      $form->house_no= $request->house_no;
      $form->flat_no= $request->flat_no;
      $form->flat_size= $request->flat_size;
      $form->save();
     
      return response()->json('successfully updated');
    }

}
