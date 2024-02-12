@extends('admin.layouts.app')
@section('title', 'Property')
@section('content')
    @include('admin.layouts.includes.breadcrumb', ['title' => ['', 'Property', 'Index']])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title">About</h4>
                    </div>
                    <form action="{{ route('admin.about.update', 1) }}" method="post">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="">About *</label>
                                <textarea name="content" class="form-control form_content">{{ $about->content }}</textarea>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->


    @push('scripts')
        @include('admin.layouts.includes.summer-note')
        <script>
            $(document).ready(function() {
                $('.form_content').summernote({
                    height: 300,
                });
            })
        </script>
    @endpush
@endsection
