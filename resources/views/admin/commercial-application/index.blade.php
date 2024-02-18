@extends('admin.layouts.app')
@section('title', 'Commercial Lease Application')
@section('content')
    @include('admin.layouts.includes.breadcrumb', [
        'title' => ['', 'Commercial Lease Application', 'Index'],
    ])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title">List of Commercial Lease Applications</h4>
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                            <i class="fa-solid fa-plus"></i> Add New
                        </button> --}}
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
    {{-- @can('slider-add')
        @include('admin.slider.create')
    @endcan --}}
    @push('scripts')
        <script>
            $(function() {
                $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    deferRender: true,
                    ordering: true,
                    // responsive: true,
                    scrollX: true,
                    scrollY: 400,
                    ajax: "{{ route('admin.commercial-applications.index') }}",
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
                            data: 'property_type',
                            name: 'property_type',
                            title: 'property type'
                        },
                        {
                            data: 'property_address',
                            name: 'property_address',
                            title: 'property address'
                        },
                        {
                            data: 'property_address2',
                            name: 'property_address2',
                            title: 'property address2'
                        },
                        {
                            data: 'property_city',
                            name: 'property_city',
                            title: 'property city'
                        },
                        {
                            data: 'property_state',
                            name: 'property_state',
                            title: 'property state'
                        },
                        {
                            data: 'property_post',
                            name: 'property_post',
                            title: 'property post'
                        },
                        {
                            data: 'property_description',
                            name: 'property_description',
                            title: 'property description'
                        },
                        {
                            data: 'parking',
                            name: 'parking',
                            title: 'parking'
                        },
                        {
                            data: 'lease_start_date',
                            name: 'lease_start_date',
                            title: 'lease start date'
                        },
                        {
                            data: 'lease_end_date',
                            name: 'lease_end_date',
                            title: 'lease end date'
                        },
                        {
                            data: 'rental_amount',
                            name: 'rental_amount',
                            title: 'rental amount'
                        },
                        {
                            data: 'payment_term',
                            name: 'payment_term',
                            title: 'payment term'
                        },
                        {
                            data: 'pay_method',
                            name: 'pay_method',
                            title: 'payment method'
                        },
                        {
                            data: 'security_amount',
                            name: 'security_amount',
                            title: 'security amount'
                        },
                        {
                            data: 'taxes',
                            name: 'taxes',
                            title: 'taxes'
                        },
                        {
                            data: 'responsible',
                            name: 'responsible',
                            title: 'responsible'
                        },
                        {
                            data: 'utilities',
                            name: 'utilities',
                            title: 'utilities'
                        },
                        {
                            data: 'insurance',
                            name: 'insurance',
                            title: 'insurance'
                        },
                        {
                            data: 'furniture',
                            name: 'furniture',
                            title: 'furniture'
                        },
                        {
                            data: 'first_name',
                            name: 'first_name',
                            title: 'first name'
                        },
                        // {
                        //     data: 'l_landlord_name',
                        //     name: 'l_landlord_name',
                        //     title: 'landlord last name'
                        // },
                        // {
                        //     data: 'last_name',
                        //     name: 'last_name',
                        //     title: 'last name'
                        // },
                        // {
                        //     data: 'phone',
                        //     name: 'phone',
                        //     title: 'phone'
                        // },
                        // {
                        //     data: 'email',
                        //     name: 'email',
                        //     title: 'email'
                        // },
                        // {
                        //     data: 'address',
                        //     name: 'address',
                        //     title: 'address'
                        // },
                        // {
                        //     data: 'address2',
                        //     name: 'address2',
                        //     title: 'address2'
                        // },
                        // {
                        //     data: 'city',
                        //     name: 'city',
                        //     title: 'city'
                        // },
                        // {
                        //     data: 'state',
                        //     name: 'state',
                        //     title: 'state'
                        // },
                        // {
                        //     data: 'post',
                        //     name: 'post',
                        //     title: 'post'
                        // },
                        // {
                        //     data: 'tenant_first_name',
                        //     name: 'tenant_first_name',
                        //     title: 'tenant first name'
                        // },
                        // {
                        //     data: 'tenant_last_name',
                        //     name: 'tenant_last_name',
                        //     title: 'tenant last name'
                        // },
                        // {
                        //     data: 'tenant_phone',
                        //     name: 'tenant_phone',
                        //     title: 'tenant phone'
                        // },
                        // {
                        //     data: 'tenant_email',
                        //     name: 'tenant_email',
                        //     title: 'tenant email'
                        // },
                        // {
                        //     data: 'tenant_address',
                        //     name: 'tenant_address',
                        //     title: 'tenant address'
                        // },
                        // {
                        //     data: 'tenant_address2',
                        //     name: 'tenant_address2',
                        //     title: 'tenant address2'
                        // },
                        // {
                        //     data: 'tenant_city',
                        //     name: 'tenant_city',
                        //     title: 'tenant city'
                        // },
                        // {
                        //     data: 'tenant_state',
                        //     name: 'tenant_state',
                        //     title: 'tenant state'
                        // },
                        // {
                        //     data: 'tenant_post',
                        //     name: 'tenant_post',
                        //     title: 'tenant post'
                        // },
                        // {
                        //     data: 'agreement_date',
                        //     name: 'agreement_date',
                        //     title: 'agreement date'
                        // },
                        // {
                        //     data: 'guarantee_lease',
                        //     name: 'guarantee_lease',
                        //     title: 'guarantee lease'
                        // },
                        // {
                        //     data: 'question',
                        //     name: 'question',
                        //     title: 'question'
                        // },
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
