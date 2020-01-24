<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\PermissionMenu;
class PermissionMenuController extends Controller
{
    
    public function storerolemenu(Request $request)
    {  
        $form= new PermissionMenu();
        $form->menu= $request->menu;
        $form->user_role= $request->user_role;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewPermissionMenu()
    {
      return new PostCollection(PermissionMenu::orderby('id','desc')->get());
    }
    public function deletePermissionMenu($id)
    {
      $post = PermissionMenu::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editPermissionMenu($id)
    {
      $post = PermissionMenu::find($id);
      return response()->json($post);
    }

    public function updatePermissionMenu($id, Request $request)
    {
      $form = PermissionMenu::find($id);  
      $form->menu= $request->menu;   
      $form->user_role= $request->user_role;  
      $form->save();
      return response()->json('successfully updated');
    }
    public function editStatus($id){

      $update =PermissionMenu::find($id);
      PermissionMenu::where('id',$id)->update(['status'=>1]);
      return  $update;
     }
      public function canclePermission($id){
      
      $update =PermissionMenu::find($id);
      PermissionMenu::where('id',$id)->update(['status'=>0]);
      return  $update;
     }
}
