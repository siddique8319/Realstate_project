<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\CommissionType;
class CommissionTypeController extends Controller
{
    
    public function storeCommissionType(Request $request)
    {     $this->validate($request, [
      'commission_type' => 'required |unique:commission_types',
        
     ]);
        $form= new CommissionType();
        $form->commission_type= $request->commission_type;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewCommissionType()
    {
      return new PostCollection(CommissionType::orderby('id','desc')->get());
    }
    public function deleteCommissionType($id)
    {
      $post = CommissionType::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editCommissionType($id)
    {
      $post = CommissionType::find($id);
      return response()->json($post);
    }

    public function updateCommissionType($id, Request $request)
    {
      $form = CommissionType::find($id);      
      $form->commission_type= $request->commission_type;   
      $form->save();
      return response()->json('successfully updated');
    }
}
