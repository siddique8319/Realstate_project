<?php

namespace App\Http\Controllers;
use App\ProjectName;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
class ProjectNameController extends Controller
{
    public function storeName(Request $request)
  {      $this->validate($request, [
         'name' => 'required |unique:project_names',
           
        ]);
        $form= new ProjectName();
        $form->name= $request->name;
        $form->save();
        return response()->json('successfully added');
    }
    public function viewProjectName()
    { 
        return new PostCollection(ProjectName::orderby('id','desc')->get());
    }
    public function deleteName($id)
    {
      $post = ProjectName::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editProjectName($id)
    {
      $post =ProjectName::find($id);
      return ['posts' => $post];
    }

    public function updateProjectName($id, Request $request)
    {
      $form = ProjectName::find($id);  
      $form->name= $request->name;
      $form->save();
      return response()->json('successfully updated');
    }
}
