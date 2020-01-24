<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\House;
class HouseController extends Controller
{
    public function storeHouse(Request $request)
    {
      $this->validate($request, [
        'house_no' => 'required |unique:houses',
          
       ]);
        $form= new House();

        $form->project_name= $request->project_name;
        $form->house_no= $request->house_no;

         $form->save();
         return response()->json('successfully added');
    }
    public function viewHouse()
    {
      return new PostCollection(House::orderby('id','desc')->get());
    }
    public function deleteHouse($id)
    {
      $post = House::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editHouse($id)
    {
      $post = House::find($id);
      return response()->json($post);
    }

    public function updateHouse($id, Request $request)
    {
      $form = House::find($id);
    
      $form->project_name= $request->project_name;
      $form->house_no= $request->house_no;

       $form->save();
     
      return response()->json('successfully updated');
    }


}
