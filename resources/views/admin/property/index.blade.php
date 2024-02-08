@extends('admin.layouts.app')
@section('title', 'Property')
@section('content')
    @include('admin.layouts.includes.breadcrumb', ['title' => ['', 'Property', 'Index']])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title">List of Properties</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                            <i class="fa-solid fa-plus"></i> Add New
                        </button>
                    </div>
                    <table id="data_table" class="table table-bordered bordered table-centered mb-0 w-100">
                        <thead>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
    @can('property-add')
        @include('admin.property.create')
    @endcan
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.note_content').summernote({
                    height: 150,
                });
            })
            $(function() {
                $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ordering: true,
                    // responsive: true,
                    scrollX: true,
                    scrollY: 400,
                    ajax: "{{ route('admin.properties.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            title: 'SL',
                            className: "text-center",
                            width: "17px",
                            searchable: false,
                            orderable: false,
                        },
                        {
                            data: 'name',
                            name: 'name',
                            title: 'name'
                        },
                        {
                            data: 'no_of_rooms',
                            name: 'no_of_rooms',
                            title: 'No of Rooms'
                        },
                        {
                            data: 'city',
                            name: 'city',
                            title: 'city'
                        },
                        {
                            data: 'state',
                            name: 'state',
                            title: 'state'
                        },
                        {
                            data: 'address',
                            name: 'address',
                            title: 'address'
                        },
                        {
                            data: 'description',
                            name: 'description',
                            title: 'description'
                        },
                        {
                            data: 'image',
                            name: 'image',
                            title: 'image'
                        },
                        {
                            data: 'is_active',
                            name: 'is_active',
                            title: 'Status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            title: 'Action',
                            className: "text-center",
                            width: "60px",
                            orderable: false,
                            searchable: false,
                        },
                    ],
                    // fixedColumns: false,
                    scroller: {
                        loadingIndicator: true
                    }
                });
            });
        </script>
    @endpush
@endsection
