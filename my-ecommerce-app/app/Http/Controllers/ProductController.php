<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Catalog;
use App\Models\Multimedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //READ
    public function index()
    {
        $products = Product::with(['catalog', 'multimedia'])->get();
        return view('products.index', compact('products'));
    }

    //ADD
    public function create()
    {
        $catalogs = Catalog::all();
        return view('products.create', compact('catalogs'));
    }

    public function store(Request $request)
{
    $product = Product::create($request->except('file_path'));

    if ($request->hasFile('file_path')) {
        foreach ($request->file('file_path') as $file) {
            $filePath = $file->store('uploads/products', 'public');
            $fileType = in_array($file->extension(), ['jpeg', 'jpg', 'png', 'gif']) ? 'image' : 'video';

            Multimedia::create([
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
        $catalogs = Catalog::all();
        return view('products.edit', compact('product', 'catalogs'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        if ($request->hasFile('file_path')) {
            foreach ($request->file('file_path') as $file) {
                $filePath = $file->store('uploads/products', 'public');
                $fileType = in_array($file->extension(), ['jpeg', 'jpg', 'png', 'gif']) ? 'image' : 'video';
                Multimedia::create([
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
        $product->multimedia()->delete();
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function deleteMedia($id)
    {
        $media = Multimedia::findOrFail($id);

        // Xóa file từ hệ thống lưu trữ
        if (Storage::disk('public')->exists($media->file_path)) {
            Storage::disk('public')->delete($media->file_path);
        }

        // Xóa record khỏi cơ sở dữ liệu
        $media->delete();

        return redirect()->back()->with('status', 'Media deleted successfully!');

    }

   
}
