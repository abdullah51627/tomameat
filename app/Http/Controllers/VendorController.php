<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendorRequest;
use App\Http\Requests\UpdateVendorRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        if($request->ajax()){

            $vendors = Vendor::with("createdBy");
            return DataTables::of($vendors)


                ->addColumn('created_at',function($row){
                    return $row->created_at->format("Y-m-d H:i:s A");
                })
                ->addColumn("action",function($row){
                    return "<button class='btn btn-danger' onclick='deleteVendor($row->id)'>Delete</button>";
                })
                ->make();
        }

        return view("admin.products.vendors");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.products.vendors-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {
        //
        $data = $request->except("_token");
        $data['created_by'] = auth()->user()->id;
        Vendor::create($data);
        return redirect()->route("vendors.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
