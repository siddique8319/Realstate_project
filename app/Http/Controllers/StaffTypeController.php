<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\StaffType;
class StaffTypeController extends Controller
{
      
    public function storeStaffType(Request $request)
    {    $this->validate($request, [
      'type' => 'required |unique:staff_types',
          ]);
        $form= new StaffType();
        $form->type= $request->type;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewStaffType()
    {
      return new PostCollection(StaffType::orderby('id','desc')->get());
    }
    public function deleteStaffType($id)
    {
      $post = StaffType::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editStaffType($id)
    {
      $post = StaffType::find($id);
      return response()->json($post);
    }

    public function updateStaffType($id, Request $request)
    {
      $form = StaffType::find($id);      
      $form->type= $request->type;  
      $form->save();
      return response()->json('successfully updated');
    }
    
}
