<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    //Category Page
    public function category(){
        return view ('admin.category');
    }
    //Getting all users from the data
    // public function list(){
    //     $getrecord = User::orderBy('id', 'asc')->get();
    //     $total = User::count();
    //     return view('admin.table', compact(['data', 'total;']));
    // }
    //create page
    public function create(){
        return view ('admin.addproduct');
    }

    //Add Product || Save Function
    public function save(Request $request){
        $validation = $request->validate([
            // 'images' => 'required',
            'title' => 'required',
            'price' => 'required',
            'variant' => 'required',
            'description' => 'required',
        ]);

        //Saving the data
        $data = Product::create($validation);
        if($data){
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin/product/create'));
        }else{
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/product/create'));
        }
    }



}
