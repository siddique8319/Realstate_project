<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\Flatno;
class FlatnoController extends Controller
{
    public function storeFlat(Request $request)
    {
      $this->validate($request, [
        'flat_no' => 'required |unique:flatnos',
          
       ]);
        $form= new Flatno();

        $form->floor_no= $request->floor_no;
        $form->house_no= $request->house_no;
        $form->flat_no= $request->flat_no;
         $form->save();
         return response()->json('successfully added');
    }
    public function viewFlat()
    {
      return new PostCollection(Flatno::orderby('id','desc')->get());
    }
    public function deleteFlat($id)
    {
      $post = Flatno::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editFlat($id)
    {
      $post = Flatno::find($id);
      return response()->json($post);
    }

    public function updateFlat($id, Request $request)
    {
      $form = Flatno::find($id);
       
      $form->floor_no= $request->floor_no;
      $form->house_no= $request->house_no;
      $form->flat_no= $request->flat_no;
       $form->save();
     
      return response()->json('successfully updated');
    }

}
