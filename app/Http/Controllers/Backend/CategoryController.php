<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function AllCategory(){

        $categories = Category::latest()->get();
        return view('backend.category.category_all',compact('categories'));
    } // End Method

    public function AddCategory(){
        return view('backend.category.category_add');
    }//End Methods

    public function StoreCategory(Request $request){
        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);

    } //End Methods

    public function EditCategory($id){
        $category = Category::findOrFail($id);
        return view('backend.category.category_edit',compact('category'));
    } //End Methods

    public function UpdateCategory(Request $request){
        $cat_id = $request->id;

        Category::findOrFail($cat_id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);
        $notification = array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);
    } //End Methods

    public function DeleteCategory($id){

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }//End Methods

    // -------------------------------- Sub Category --------------------------------


    public function AllSubCategory(){

        $subcategories = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_all',compact('subcategories'));
    } // End Method


    public function AddSubCategory(){
        $categories = Category::latest()->get();

        return view('backend.subcategory.subcategory_add',compact('categories'));
    } // End Method



    public function StoreSubCategory(Request $request){
        Subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);
        $notification = array(
            'message' => 'Sub-Category Inserted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.subcategory')->with($notification);

    } //End Methods


    public function EditSubCategory($id) {
        $categories = Category::latest()->get();
        $subcategory = Subcategory::findOrFail($id);
        return view('backend.subcategory.subcategory_edit',compact('categories','subcategory'));
    } //End Methods


        public function UpdateSubCategory(Request $request){
        $subcat_id = $request->id;

        Subcategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);
        $notification = array(
            'message' => 'sub-Category Update Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.subcategory')->with($notification);
    } //End Methods

    public function DeleteSubCategory($id){

        Subcategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sub-Category Delete Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }//End Methods


    public function GetSubCategory($category_id){

        $subcat = Subcategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);

    }// End Mehtod

}
