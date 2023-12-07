@extends('layouts.master')
@section('title')
@lang('translation.Basic_Elements')
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Categories @endslot
@slot('title') Create Product @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
            <div class="card-body">

                <h4 class="card-title">Create Categories</h4>
                <p class="card-title-desc">Add new categories</p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3 ">
                            <label for="example-text-input" class=" col-form-label">Name</label>
                            <div class="col-md-13">
                                <input class="form-control" type="text" name='name' value="{{old("name")}}" id="category-name">
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
