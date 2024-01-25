@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Products @endslot
        @slot('title') Products List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Products List</h4>
                    <p class="card-title-desc">list of all products shown here</code>.
                    </p>
                    @include('message')
                    <div class="col-lg-4">
                        <label for="">Filter vendor</label>
                        <select name="vendor_list" id="vendor" class="form-control">
                            <option value="0">Select any vendor</option>
                            @foreach(\App\Models\Vendor::get() as $vendor)
                                <option {{request()->has("vendor_id") ? request("vendor_id") == $vendor->id ? "selected": "" :"" }} value="{{$vendor->id}}">{{$vendor->name}}</option>
                            @endforeach
                        </select>
                        <br>

                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Vendor</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div id="editProductModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route("products.update",":id")}}" method="POST" id="productUpdateForm">
                        @csrf 
                        @method("PATCH")
                        <div class="">
                            <label for="pro-name">Name</label>
                            <input type="text" name="name" id="pro-name" class="form-control">
                        </div>
    
                        <div class="">
                            <label for="pro-qty">Quantity</label>
                            <input type="text" name="qty" id="pro-qty" class="form-control">
                        </div>

                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="document.getElementById('productUpdateForm').submit()">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
    <script !src="">
        {{--$("#datatable").DataTable({--}}
        {{--    url: "{{route('products.index')}}",--}}
        {{--    success: function(data, status){--}}
        {{--        console.log(data)--}}
        {{--    }--}}
        {{--})--}}
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('products.index') }}",
                "data": function ( d ) {
                    d.vendor_id = {{request()->has("vendor_id") ? request("vendor_id") :"0"}};
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'name', name: 'name'},
                {data: 'category_rel.name', name: 'category_rel.name',searchable:false},
                {data: 'qty', name: 'qty',searchable:false},
                {data: 'price', name: 'price',searchable:false},
                {data: 'status', name: 'status'},
                {data: 'vendor.name', name: 'vendor.name'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        function editProduct(id){
            let url = "{{route('products.show',":id")}}";
            url = url.replace(":id",id);
            console.log(url);
            $.get(url,{},function(data,status){
                if(data.code == 200){
                    data = data.data;
                    console.log(data)
                $("#editProductModal").modal("show");
                   $("#pro-name").val(data.name);
                   $("#pro-qty").val(data.qty);
                   let url = $("#productUpdateForm").attr("action");
                   url = url.replace(":id",data.id);
                   $("#productUpdateForm").attr("action",url)
                }
            })
        }

        $("#vendor").on("change",function(){
            const optionSelected = $(this).find(" option:selected").val();
            window.location.href = "/admin/products?vendor_id="+optionSelected;
        })
    </script>
@endsection
