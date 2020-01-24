<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\CommissionEntry;

class CommissionEntryController extends Controller
{
     
    public function storeCommissionEntry(Request $request)
    {     $this->validate($request, [
      'com' => 'required |unique:commission_entries',
        
     ]);
        $form= new CommissionEntry();
        $form->commission_type= $request->commission_type;
        $form->com= $request->com;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewCommissionEntry()
    {
      return new PostCollection(CommissionEntry::orderby('id','desc')->get());
    }
    public function deleteCommissionEntry($id)
    {
      $post = CommissionEntry::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editCommissionEntry($id)
    {
      $post = CommissionEntry::find($id);
      return response()->json($post);
    }

    public function updateCommissionEntry($id, Request $request)
    {
      $form = CommissionEntry::find($id);      
      $form->commission_type= $request->commission_type;
      $form->com= $request->com;  
      $form->save();
      return response()->json('successfully updated');
    }
}
