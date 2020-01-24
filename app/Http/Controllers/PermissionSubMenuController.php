<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\PermissionSubMenu;
class PermissionSubMenuController extends Controller
{
     
    public function storePsubmenu(Request $request)
     {  //$this->validate($request, [
    //     'url' => 'required |unique:permission_sub_menus',
    //   ]);
        $form= new PermissionSubMenu();
        $form->menu= $request->menu;
        $form->sub_menu= $request->sub_menu;
        $form->user_role= $request->user_role;
        $form->url= $request->url;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewPermissionSubMenu()
    {
      return new PostCollection(PermissionSubMenu::orderby('id','desc')->get());
    }
    public function deletePermissionSubMenu($id)
    {
      $post = PermissionSubMenu::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editPermissionSubMenu($id)
    {
      $post = PermissionSubMenu::find($id);
      return response()->json($post);
    }

    public function updatePermissionSubMenu($id, Request $request)
    {
      $form = PermissionSubMenu::find($id);  
      $form->menu= $request->menu;   
      $form->sub_menu= $request->sub_menu;
      $form->user_role= $request->user_role;  
      $form->url= $request->url;
      $form->save();
      return response()->json('successfully updated');
    }
    public function editStatus($id){

      $update =PermissionSubMenu::find($id);
      PermissionSubMenu::where('id',$id)->update(['status'=>1]);
      return  $update;
     }
      public function canclePermission($id){
      
      $update =PermissionSubMenu::find($id);
      PermissionSubMenu::where('id',$id)->update(['status'=>0]);
      return  $update;
     }
}
