<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Post;
use App\ProjectName;
use App\House;
class PostController extends Controller
{
    public function store(Request $request)
    {
      $post = new Post([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $post->save();

      return response()->json('successfully added');
    }
    public function storeName(Request $request)
    {
        $form= new ProjectName();


        $form->name= $request->name;

         $form->save();
         return response()->json('successfully added');
    }
    public function storeHouse(Request $request)
    {
        $form= new House();


        $form->name= $request->name;

         $form->save();
         return response()->json('successfully added');
    }
    public function viewProjectName()
    {
      return new PostCollection(ProjectName::all());
    }
    public function viewHouse()
    {
      return new PostCollection(House::all());
    }


    public function index()
    {
      return new PostCollection(Post::all());
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return response()->json($post);
    }

    public function update($id, Request $request)
    {
      $post = Post::find($id);

      $post->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $post = Post::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function deleteHouse($id)
    {
      $post = House::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
}
