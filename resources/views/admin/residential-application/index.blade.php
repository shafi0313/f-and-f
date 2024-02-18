@extends('admin.layouts.app')
@section('title', 'Residential Rental Application')
@section('content')
    @include('admin.layouts.includes.breadcrumb', [
        'title' => ['', 'Residential Rental Application', 'Index'],
    ])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title">List of Residential Rental Applications</h4>
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
                    ajax: "{{ route('admin.residential-applications.index') }}",
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
                            data: 'first_name',
                            name: 'first_name',
                            title: 'first name'
                        },
                        {
                            data: 'last_name',
                            name: 'last_name',
                            title: 'last name'
                        },
                        {
                            data: 'phone',
                            name: 'phone',
                            title: 'phone'
                        },
                        {
                            data: 'email',
                            name: 'email',
                            title: 'email'
                        },
                        {
                            data: 'd_of_b',
                            name: 'd_of_b',
                            title: 'date of birth'
                        },
                        {
                            data: 'vehicle',
                            name: 'vehicle',
                            title: 'vehicle'
                        },
                        {
                            data: 'job_title',
                            name: 'job_title',
                            title: 'job title'
                        },
                        {
                            data: 'company',
                            name: 'company',
                            title: 'company'
                        },
                        {
                            data: 'department',
                            name: 'department',
                            title: 'department'
                        },
                        {
                            data: 'monthly_income',
                            name: 'monthly_income',
                            title: 'monthly income'
                        },
                        {
                            data: 'annual_income',
                            name: 'annual_income',
                            title: 'annual income'
                        },
                        {
                            data: 'pets',
                            name: 'pets',
                            title: 'pets'
                        },
                        {
                            data: 'current_address',
                            name: 'current_address',
                            title: 'current address'
                        },
                        {
                            data: 'current_address2',
                            name: 'current_address2',
                            title: 'current address 2'
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
                            data: 'post',
                            name: 'post',
                            title: 'post'
                        },
                        {
                            data: 'job_duration',
                            name: 'job_duration',
                            title: 'job duration'
                        },
                        {
                            data: 'leaving',
                            name: 'leaving',
                            title: 'leaving'
                        },
                        {
                            data: 'f_landlord_name',
                            name: 'f_landlord_name',
                            title: 'landlord first name'
                        },
                        {
                            data: 'l_landlord_name',
                            name: 'l_landlord_name',
                            title: 'landlord last name'
                        },
                        {
                            data: 'landlord_phone',
                            name: 'landlord_phone',
                            title: 'landlord phone'
                        },
                        {
                            data: 'evicted',
                            name: 'evicted',
                            title: 'evicted'
                        },
                        {
                            data: 'crime',
                            name: 'crime',
                            title: 'crime'
                        },
                        {
                            data: 'move_date',
                            name: 'move_date',
                            title: 'move date'
                        },
                        {
                            data: 'security_date',
                            name: 'security_date',
                            title: 'security date'
                        },
                        {
                            data: 'pay_method',
                            name: 'pay_method',
                            title: 'pay method'
                        },
                        {
                            data: 'signature1',
                            name: 'signature1',
                            title: 'signature1'
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
