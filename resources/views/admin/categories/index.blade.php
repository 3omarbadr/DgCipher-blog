@extends('admin.layouts.master')

@section('main')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Articles</h4>
            <div class="page-title-right">
                <a href="{{route('categories.create')}}" class="btn btn-light" style="padding: 0.4rem 0.9rem">
                    <i class="fas fa-file fa-fw mr-1" aria-hidden="true"></i>
                    Add new Category
                </a>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection