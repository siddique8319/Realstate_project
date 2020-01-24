<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\Designation;
class DesignationController extends Controller
{
        
    public function storeDesignation(Request $request)
    {  
      $this->validate($request, [
        'designation' => 'required |unique:designations',
            ]);
        $form= new Designation();
        $form->designation= $request->designation;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewDesignation()
    {
      return new PostCollection(Designation::orderby('id','desc')->get());
    }
    public function deleteDesignation($id)
    {
      $post = Designation::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editDesignation($id)
    {
      $post =Designation::find($id);
      return response()->json($post);
    }

    public function updateDesignation($id, Request $request)
    {
      $form = Designation::find($id);      
      $form->designation= $request->designation;  
      $form->save();
      return response()->json('successfully updated');
    }
}
