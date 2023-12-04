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

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

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
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'name', name: 'name'},
                {data: 'category', name: 'category'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    </script>
@endsection
