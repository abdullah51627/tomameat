@extends('layouts.master')
@section('title')
@lang('translation.Basic_Elements')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Products @endslot
@slot('title') Create Product @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
            <div class="card-body">

                <h4 class="card-title">Create Products</h4>
                <p class="card-title-desc">Add new products</p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Name</label>
                            <div class="col-md-13">
                                <input class="form-control" type="text" name='name' value="{{old("name")}}" id="product-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Priority</label>
                            <select class="form-select" name='priority'>
                                @foreach(\App\Helpers\ProductsHelper::getPriorities() as $priority)
                                <option value="{{$priority}}">{{$priority}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Slug</label>
                            <div class="col-md-13">
                                <input class="form-control" type="text" name='' id="example-text-input">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input"  class=" col-form-label">Price</label>
                            <div class="col-md-13">
                                <input class="form-control" value="{{old('price')}}" type="text" id="price" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Quantity</label>
                            <div class="col-md-13">
                                <input class="form-control" type="number" value="{{old('qty')}}" id="qty" name="qty">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Title</label>
                            <div class="col-md-13">
                                <input class="form-control" type="text" value="{{old('title')}}" name="title" id="title">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Keywords</label>
                            <div class="col-md-13">
                                <select class="multiple-select js-example-basic-multiple form-control" name="keywords[]" multiple="multiple">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Category</label>
                            <div class="col-md-13">
                                <select class="multiple-select js-example-basic-multiple form-control" name="category">
                                    @foreach(\App\Models\Category::get() as $categoary)
                                        <option value="{{$categoary->id}}">{{$categoary->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Description</label>
                            <div class="col-md-13">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-success">Submit</button>
                    </div>

                </div>

            </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>




<!-- end row -->

@endsection
