<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\SubMenu;
class SubMenuController extends Controller
{
    public function storeSubMenu(Request $request)
    {   $this->validate($request, [
       'sub_menu' => 'required |unique:sub_menus',
     ]);
        $form= new SubMenu();
       
        $form->sub_menu= $request->sub_menu;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewSubMenu()
    {
      return new PostCollection(SubMenu::orderby('id','desc')->get());
    }
    public function deleteSubMenu($id)
    {
      $post = SubMenu::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editSubMenu($id)
    {
      $post =SubMenu::find($id);
      return response()->json($post);
    }

    public function updateSubMenu($id, Request $request)
    {
      $form = SubMenu::find($id);  
      
      $form->sub_menu= $request->sub_menu;
      $form->save();
      return response()->json('successfully updated');
    }
}
