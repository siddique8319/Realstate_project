<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\FlatPrice;
class FlatPriceController extends Controller
{
    public function storeFlatPrice(Request $request)
    {
      $this->validate($request, [
        'flat_price' => 'required |unique:flat_prices',
          
       ]);
        $form= new FlatPrice();

        $form->floor_no= $request->floor_no;
        $form->house_no= $request->house_no;
        $form->flat_no= $request->flat_no;
        $form->flat_price= $request->flat_price;
         $form->save();
         return response()->json('successfully added');
    }
    public function viewFlatPrice()
    {
      return new PostCollection(FlatPrice::orderby('id','desc')->get());
    }
    public function deleteFlatPrice($id)
    {
      $post = FlatPrice::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editFlatPrice($id)
    {
      $post = FlatPrice::find($id);
      return response()->json($post);
    }

    public function updateFlatPrice($id, Request $request)
    {
      $form = FlatPrice::find($id);
       
      $form->floor_no= $request->floor_no;
      $form->house_no= $request->house_no;
      $form->flat_no= $request->flat_no;
      $form->flat_price= $request->flat_price;
      $form->save();
     
      return response()->json('successfully updated');
    }
}
