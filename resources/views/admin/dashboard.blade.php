@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box justify-content-between d-flex align-items-lg-center flex-lg-row flex-column">
                <h4 class="page-title">Dashboard</h4>
                <form class="d-flex mb-xxl-0 mb-2">
                    <div class="input-group">
                        <input type="text" class="form-control shadow border-0" id="dash-daterange">
                        <span class="input-group-text bg-primary border-primary text-white">
                            <i class="ri-calendar-todo-fill fs-13"></i>
                        </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                        <i class="ri-refresh-line"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
