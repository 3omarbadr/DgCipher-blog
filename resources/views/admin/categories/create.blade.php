@extends('admin.layouts.master')

@section('styles')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('main')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Add New Category</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Articles</a></li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </div>

        </div>
        @include('admin.layouts.partials.errors')
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-12">
        <form action="{{route('categories.store')}}" method="POST" id="add-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title">Add new Category</h4> --}}
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="name" value="Artisanal kale"
                                        id="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </form>
</div>
</div>
<!-- end row -->

<div class="bg-white  box-shadow-m-up text-left py-3" style="position: fixed;bottom: 0;width: 100%;z-index: 1;">

    <div class="group-buttons d-xs-mx-3" style="padding-left: 1.7rem;">

        <button type="submit" form="add-form" class="btn btn-primary waves-effect waves-light"> <i
                class="fas fa-plus fa-fw mr-1" aria-hidden="true"></i>
            Add new category </button>

        <button type="reset" class="btn btn-danger waves-effect waves-light"> <i class="fas fa-trash-alt fa-fw mr-1"
                aria-hidden="true"></i>
            Clear </button>

    </div>
</div>

@endsection