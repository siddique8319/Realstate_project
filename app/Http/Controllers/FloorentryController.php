<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\FloorEntry;
class FloorentryController extends Controller
{
  
    public function storeFloor(Request $request)
    {
       $this->validate($request, [
      'floor_no' => 'required |unique:floor_entries',
         ]);
        $form= new FloorEntry();

        $form->floor_no= $request->floor_no;
        $form->house_no= $request->house_no;

         $form->save();
         return response()->json('successfully added');
    }
    public function viewFloor()
    {
      return new PostCollection(FloorEntry::orderby('id','desc')->get());
    }
    public function deleteFloor($id)
    {
      $post = FloorEntry::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editFloor($id)
    {
      $post = FloorEntry::find($id);
      return response()->json($post);
    }

    public function updateFloor($id, Request $request)
    {
      $form = FloorEntry::find($id);
       
      $form->floor_no= $request->floor_no;
      $form->house_no= $request->house_no;

       $form->save();
     
      return response()->json('successfully updated');
    }

}
