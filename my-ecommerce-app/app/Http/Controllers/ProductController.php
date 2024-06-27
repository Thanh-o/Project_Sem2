<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //READ
    public function index()
    {
        $products = Product::with(['category', 'images'])->get();
        return view('products.index', compact('products'));
    }

    //CREATE
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
{
    $product = Product::create($request->except('file_path'));

    if ($request->hasFile('file_path')) {
        foreach ($request->file('file_path') as $file) {
            $filePath = $file->store('uploads/products', 'public');
            $fileType = in_array($file->extension(), ['jpeg', 'jpg', 'png', 'gif']) ? 'image' : 'video';

            Image::create([
                'product_id' => $product->product_id,
                'file_path' => $filePath,
                'file_type' => $fileType,
            ]);
        }
    }

    return redirect()->route('products.index')->with('status', 'Product created successfully!');
}

    //UPDATE
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        if ($request->hasFile('file_path')) {
            foreach ($request->file('file_path') as $file) {
                $filePath = $file->store('uploads/products', 'public');
                $fileType = in_array($file->extension(), ['jpeg', 'jpg', 'png', 'gif']) ? 'image' : 'video';
                Image::create([
                    'product_id' => $product->product_id,
                    'file_path' => $filePath,
                    'file_type' => $fileType,
                ]);
            }
        }

        return redirect()->route('products.index')->with('status', 'Product updated successfully!');
    }

    //DELETE
    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }
        $product->image()->delete();
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);

        // Xóa file từ hệ thống lưu trữ
        if (Storage::disk('public')->exists($image->file_path)) {
            Storage::disk('public')->delete($image->file_path);
        }

        $image->delete();

        return redirect()->back()->with('status', 'Media deleted successfully!');

    }

    //Category
      //Read
    public function indexcate(){
        $categories = Category::all();
        return view('products.category', compact('categories'));
    }
      //Add
     public function addcate(Request $request){
        Category::create($request->all());
        return redirect()->route('products.category')->with('success', "Added category successfully!");
     }

      //Delete
    public function deletecate($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('products.category')->with('success', "Deleted category successfully!");
    }  

   
}
