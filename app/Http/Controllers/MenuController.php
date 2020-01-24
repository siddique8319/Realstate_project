<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\Menu;
class MenuController extends Controller
{
    
    public function storeMenu(Request $request)
    {   $this->validate($request, [
      'menu' => 'required |unique:menus',
         ]);
        $form= new Menu();
        $form->menu= $request->menu;
        $form->save();
       return response()->json('successfully added');
    }
    public function viewMenu()
    {
      return new PostCollection(Menu::orderby('id','desc')->get());
    }
    public function deleteMenu($id)
    {
      $post = Menu::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editMenu($id)
    {
      $post =Menu::find($id);
      return response()->json($post);
    }

    public function updateMenu($id, Request $request)
    {
      $form = Menu::find($id);  
      $form->menu= $request->menu;    
      $form->save();
      return response()->json('successfully updated');
    }
}
