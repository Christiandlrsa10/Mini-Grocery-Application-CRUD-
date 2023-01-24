<?php

namespace App\Http\Controllers;

use App\Models\Grocery;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
    public function index() {
       return view('Grocery.list');
    }

    public function create() {
       return view('Grocery.create');
    }

    public function store(Request $request) {
      $validator = Validator::make($request->all(),[
         'product' => 'required',
         'type' => 'required',
         'price' => 'required',
         'image' => 'sometimes|image:gif,png,jpeg,jpg'
      ]);

      if ( $validator->passes() ) {

         $Grocery = new Grocery();
         $Grocery -> product = $request->product;
         $Grocery -> type = $request->type;
         $Grocery -> price = $request->price;
         $Grocery->save();

         $Grocery = Grocery::create($request->post());

         if ($request->image) {
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time().'.'.$ext;
            $request->image->move(public_path().'/uploads/grocery/',$newFileName);
            
            $Grocery->image = $newFileName;
            $Grocery->save();
        }

         return redirect()->route('Grocery.index');

      } else {
         
         return redirect()->route('Grocery.create')->withErrors($validator);
      
      }

    }
}
