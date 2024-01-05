<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
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
            $data = Product::with("categoryRel");
            return DataTables::of($data)
            ->addColumn("action",function($row){
                return $row->categoryRel;
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
                    return "<button class='btn btn-primary' onclick='manageQty($row->id)'>Manage</button>";
                })
                ->make();
        }
        return view("admin.products.inventory");
    }
}
