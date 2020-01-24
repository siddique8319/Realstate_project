<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\Discount;
class DiscountController extends Controller
{
    public function storeDiscount(Request $request)
    {  
      $this->validate($request, [
        'discount' => 'required |unique:discounts',
          
       ]);
        $form= new Discount();

        $form->floor_no= $request->floor_no;
        $form->house_no= $request->house_no;
        $form->flat_no= $request->flat_no;
        $form->discount= $request->discount;
        $form->start_date= $request->start_date;
        $form->end_date= $request->end_date;
         $form->save();
         return response()->json('successfully added');
    }
    public function viewDiscount()
    {
      return new PostCollection(Discount::orderby('id','desc')->get());
    }
    public function deleteDiscount($id)
    {
      $post = Discount::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
    public function editDiscount($id)
    {
      $post = Discount::find($id);
      return response()->json($post);
    }

    public function updateDiscount($id, Request $request)
    {
      $form = Discount::find($id);      
      $form->floor_no= $request->floor_no;
      $form->house_no= $request->house_no;
      $form->flat_no= $request->flat_no;
      $form->discount= $request->discount;
      $form->start_date= $request->start_date;
      $form->end_date= $request->end_date;   
      $form->save();
      return response()->json('successfully updated');
    }
}
