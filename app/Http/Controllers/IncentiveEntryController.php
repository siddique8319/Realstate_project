<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\IncentiveEntry;
class IncentiveEntryController extends Controller
{
        
    public function storeIncentive(Request $request)
    {  
         $this->validate($request, [
        'incentive' => 'required |unique:incentive_entries',
        
       ]);
        $form= new IncentiveEntry();
        $form->incentive= $request->incentive;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewIncentive()
    {
      return new PostCollection(IncentiveEntry::orderby('id','desc')->get());
    }
    public function deleteIncentive($id)
    {
      $post = IncentiveEntry::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editIncentive($id)
    {
      $post = IncentiveEntry::find($id);
      return response()->json($post);
    }

    public function updateIncentive($id, Request $request)
    {
      $form = IncentiveEntry::find($id);      
      $form->incentive= $request->incentive;   
      $form->save();
      return response()->json('successfully updated');
    }}
