<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRes;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        if($request->ajax()){
            
            $data = Product::with(["categoryRel","vendor"]);
            
            if($request->vendor_id > 0){
                $data->where("vendor_id",$request->vendor_id);
            }
            return DataTables::of($data)
                ->addColumn("status",function($row){
                    return $row->status == 1 ? 'active': "inactive";
                })
            ->addColumn("action",function($row){
                return "<button onclick='editProduct($row->id)' class='btn btn-primary'>Edit</button>";
            })
                ->make();
        }
        return view("admin.products.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //


        $data = $request->except(['_token']);
        $data['url'] = Str::slug($data['title']);
        $data['meta_description'] = $data['description'];
        Product::create($data);
        return redirect()->back()->with(['successMsg' => ["Product Created Successfully!"]]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return ApiRes::success("Product founnd",200,$product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $product->name = $request->name;
        $product->qty = $request->qty;
        $product->save();
        return redirect()->back()->with(["sucessMsg" => ["Product has been updated"]]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function inventory(Request $request){
//        dd($request->all());
        if($request->ajax()){
            $data = Product::with("categoryRel");
            return DataTables::of($data)
                ->addColumn("status",function($row){
                    return $row->status == 1 ?"active":"inactive";
                })
                ->addColumn("action",function($row){
                    return "";
                    return "<button class='btn btn-primary' onclick='manageQty($row->id)'>Manage</button>";
                })
                ->make();
        }
        return view("admin.products.inventory");
    }
    public function orders(Request $request){


        if($request->ajax()){
            $orders = Order::with('customer')->get();

            return DataTables::of($orders)

                ->addColumn("action",function($row){
//                    return "";
                    return "<button class='btn btn-primary' onclick='manageOrder($row->id)'>Manage</button>";
                })
                ->make();
        }
        return view("admin.products.orders");
    }

    public function orderFind(Request $request){
        return $request->all();
    }

    public function updateOrders(Request $request){
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required',
        ]);
        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->save();
        return redirect()->back()->with(['successMsg' =>["Updated success"]]);
    }

}
