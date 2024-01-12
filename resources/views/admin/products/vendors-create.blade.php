@extends('layouts.master')
@section('title')
    @lang('translation.Basic_Elements')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Vendors @endslot
        @slot('title') Create Product @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('vendors.store')}}" method="POST">
                    @csrf
                    <div class="card-body">

                        <h4 class="card-title">Create Vendors</h4>
                        <p class="card-title-desc">Add new vendors</p>

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
                                    <label for="example-text-input" class=" col-form-label">Status</label>
                                    <div class="col-md-13">
                                        <select name="status" class="form-control">
                                            <option  value="active">Active</option>
                                            <option  value="inactive">Inactive</option>
                                        </select>
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
