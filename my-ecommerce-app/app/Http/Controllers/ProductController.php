<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Employee;
use App\Models\OrderDetail;
use App\Models\Cart;

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
        $product->images()->delete();
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
     //Edit
     public function editcate(Request $request,$id){
        $category = Category::findOrFail($id);
        $category->update($request->only(['cate_name'])) ;
        return redirect()->route('products.category')->with('success', "Edited category successfully!");
     }

      //Delete
    public function deletecate($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('products.category')->with('success', "Deleted category successfully!");
    }  

    public function indexp()
    {
        $products = Product::with(['category', 'images'])->get();
        return view('products', compact('products'));
    }

    //Show
    public function show($id)
    {
    $product = Product::find($id);
    return view('products.show', compact('product'));
    }

        //ADMIN
        public function aindex()
        {
            $products = Product::with(['category', 'images'])->paginate(10);
            $newproducts = Product::latest()->take(5)->get();
            $totalCus = Customer::count();
            $totalEm = Employee::count();
            $categories = Category::all();
            $totalPro = Product::count();
            $complete = Order::where('status', 'Completed')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
    
            $cancel = Order::where('status', 'Cancelled')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
            
            $maxCateId = Category::max('cate_id') + 1;
            return view('admin.product.index', compact('products', 'newproducts', 'complete','cancel', 'totalCus', 'totalEm', 'categories', 'totalPro', 'maxCateId'));
        }
        
        public function getProductsByCategory($cate_id)
        {
            $category = Category::find($cate_id);
    
            if (!$category) {
                return response()->json(['message' => 'Category not found'], 404);
            }
    
            $products = Product::where('cate_id', $cate_id)->with(['category', 'images'])->get();
    
            return view('admin.product.category', compact('category', 'products'));
        }
        //Add
        public function acreate()
        {
            
            $products = Product::with(['category', 'images'])->get();
            $newproducts = Product::latest()->take(5)->get(); 
            $totalOrders = Order::count(); 
            $totalCus = Customer::count(); 
            $totalEm = Employee::count(); 
            $categories = Category::all(); 
            $totalPro = Product::count(); 
            return view('admin.product.create', compact( 'products', 'newproducts', 'totalOrders', 'totalCus', 'totalEm', 'categories', 'totalPro'));
        }
    
        public function astore(Request $request)
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
    
        return redirect()->route('admin.product.index')->with('status', 'Product updated successfully!');
    }
    //Edit
    public function aedit($id)
    {
        $product = Product::with('images')->find($id); 
        $products = Product::with(['category', 'images'])->get();
        $newproducts = Product::latest()->take(5)->get(); 
        $totalOrders = Order::count(); 
        $totalCus = Customer::count(); 
        $totalEm = Employee::count(); 
        $categories = Category::all(); 
        $totalPro = Product::count(); 
        return view('admin.product.edit', compact('product', 'products', 'newproducts', 'totalOrders', 'totalCus', 'totalEm', 'categories', 'totalPro'));
    }
    
    public function aupdate(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
    
        if ($request->has('deleted_images')) {
            foreach ($request->deleted_images as $imageId) {
                $image = Image::find($imageId);
                if ($image) {
                    // Delete from storage
                    Storage::disk('public')->delete($image->file_path);
                    
                    // Delete from database
                    $image->delete();
                }
            }
        }
    
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
    
        return redirect()->route('admin.product.index')->with('status', 'Product updated successfully!');
    }
    
    
   //Delete
    public function adelete($id)
    {
        
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->route('admin.product.index')->with('error', 'Product not found.');
        }
    
        
        $product->images()->delete();
    
        
        $product->delete();
    
        
        OrderDetail::where('product_id', $id)->delete();
    
        
        Cart::where('product_id', $id)->delete();
    
        $orders = Order::whereHas('orderDetails', function ($query) use ($id) {
            $query->where('product_id', $id);
        })->get();
    
        foreach ($orders as $order) {
            $order->orderDetails()->where('product_id', $id)->delete();
            $order->updateTotalAmount();
        }
    
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
    

    public function adeleteImage($id)
    {
        $image = Image::findOrFail($id);

        if (Storage::disk('public')->exists($image->file_path)) {
            Storage::disk('public')->delete($image->file_path);
        }

        $image->delete();

        return redirect()->back()->with('status', 'Media deleted successfully!');

    }
    
        //Category
          //Read
          public function aindexcate(){
            $categories = Category::all();
            return view('admin.product.category', compact('categories'));
        }
          //Add
         public function aaddcate(Request $request){
            Category::create($request->all());
            return redirect()->route('admin.product.index')->with('success', "Added category successfully!");
         }
         //Edit
         public function aeditcate(Request $request,$id){
            $category = Category::findOrFail($id);
            $category->update($request->only(['cate_name'])) ;
            return redirect()->route('admin.product.index')->with('success', "Updated category successfully!");
         }
    
          //Delete
        public function adeletecate($id){
            Category::findOrFail($id)->delete();
            return redirect()->route('admin.product.index')->with('success', "Deleted category successfully!");
        }  
}
