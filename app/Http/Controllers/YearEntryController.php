<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\YearEntry;
class YearEntryController extends Controller
{
    public function storeYear(Request $request)
    {   $this->validate($request, [
      'year' => 'required |unique:year_entries',
      'month' => 'required |unique:year_entries',
     ]);
        $form= new YearEntry();
        $form->year= $request->year;
        $form->month= $request->month;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewYear()
    {
      return new PostCollection(YearEntry::orderby('id','desc')->get());
    }
    public function deleteYear($id)
    {
      $post = YearEntry::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editYear($id)
    {
      $post =YearEntry::find($id);
      return response()->json($post);
    }

    public function updateYear($id, Request $request)
    {
      $form = YearEntry::find($id);  
      $form->year= $request->year;    
      $form->month= $request->month;
      $form->save();
      return response()->json('successfully updated');
    }
}
