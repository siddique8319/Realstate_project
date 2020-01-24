<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\Staff;
class StaffController extends Controller
{
        
    public function storeStaff(Request $request)
    {  $this->validate($request, [
      'info' => 'required |unique:staff',
     
     ]);
        $form= new Staff();
        $form->type= $request->type;
        $form->designation= $request->designation;
        $form->info= $request->info;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewStaff()
    {
      return new PostCollection(Staff::orderby('id','desc')->get());
    }
    public function deleteStaff($id)
    {
      $post = Staff::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editStaff($id)
    {
      $post =Staff::find($id);
      return response()->json($post);
    }

    public function updateStaff($id, Request $request)
    {
      $form = Staff::find($id);  
      $form->type= $request->type;    
      $form->designation= $request->designation;  
      $form->info= $request->info;
      $form->save();
      return response()->json('successfully updated');
    }
}
