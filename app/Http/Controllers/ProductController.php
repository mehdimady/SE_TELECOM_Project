<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Marque;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // $values =  $request->validate([
    //     'name'=>[ 'distinct:strict', 'distinct:strict'],
    // 'email'=>[]]);
    // Product::create()


    public function addproduct()
    {
        $categories = Category::All()->pluck('category_name', 'category_name');
        $marques = Marque::All()->pluck('marque_name', 'marque_name');
        return view('admin.addproduct')->with('categories', $categories)->with('marques', $marques);
    }
    

    public function products()
    {
        $products = Product::All();

        return view('admin.products')->with('products', $products);
    }


    public function saveproduct(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required|not_in:0|regex:/^\d+(\.\d{1,2})?$/',
            'product_category' => 'required',
            'product_marque' => 'required',
            'product_description' => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('product_image')) {
            // 1 :get file name with extesion
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            //2 :get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //3 :get just file extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            //4 :file name store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_marque = $request->input('product_marque');
        $product->product_description = $request->input('product_description');
        $product->product_image = $fileNameToStore;
        $product->status = 1;

        $product->save();
        return back()->with('status', 'Le produit a été enregistrer avec succès');
    }


    public function edit_product($id)
    {
        $product = Product::find($id);
        $marques = Marque::All()->pluck('marque_name', 'marque_name');
        $categories = Category::All()->pluck('category_name', 'category_name');
        return view('admin.editproduct')->with('product', $product)->with('categories', $categories)->with('marques', $marques);
    }


    public function upadateproduct(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required|not_in:0|regex:/^\d+(\.\d{1,2})?$/',
            'product_category' => 'required',
            'product_marque' => 'required',
            'product_description' => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);
        $product = Product::find($request->input('id'));
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_category = $request->input('product_marque');
        $product->product_description = $request->input('product_description');

                if ($request->hasFile('product_image')) {
                    // 1 :get file name with exte
                    $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
                    //2 :get just file name
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    //3 :get just file extension
                    $extension = $request->file('product_image')->getClientOriginalExtension();
                    //4 :file name store
                    $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                    //upload image
                    $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
                    if ($product->product_image != 'noimage.jpg') {
                        Storage::delete('./public/product_images/' . $product->product_image);
                    }
                    $product->product_image = $fileNameToStore;
                }

        $product->update();
        return redirect()->route('products')->with('status', 'Le produit a été modifié avec succès');
    }



    public function delete_product($id)
    {
        $product = Product::find($id);

            if ($product->product_image != 'noimage.jpg') {
                Storage::delete('./public/product_images/' . $product->product_image);
            }

        $product->delete();
        return back()->with('status', 'Le produit a été supprimé avec succès');
    }


    public function activer_product($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        return back();
    }


    public function desactiver_product($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();
        return back();
    }


    public function select_par_cat($category_name)
    {
        $products = Product::All()->where('product_category', $category_name)->where('status', 1);
        $categories = Category::All();
        $marques = Marque::All();
        return view('shop')->with('products', $products)->with('categories', $categories)->with('by_category', true)->with('marques', $marques);
    }


    public function select_par_marque($marque_name)
    {
        $products = Product::All()->where('product_marque', $marque_name)->where('status', 1);
        $marques = Marque::All();
        $categories = Category::All();
        return view('shop')->with('products', $products)->with('marques', $marques)->with('by_category', true)->with('categories', $categories);
    }


    public function select_par_prix(Request $request)
    {
        $price = $request->validate(['min_price' => ['min:0', 'nullable', 'numeric'], 'max_price' => ['numeric']]);
        $marques = Marque::All();
        $categories = Category::All();

        $products = Product::where('product_price', '>=', $price['min_price'])->where('product_price', '<=', $price['max_price'])->get();
        return view('shop')->with('products', $products)->with('marques', $marques)->with('categories', $categories)->with('by_category', true);
    }

    
}
