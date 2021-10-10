@extends('layouts.app')
@section('title','Category')
@section('current_page','Add Category')
@section('content_title')
    <div class="title d-flex justify-content-between align-items-center">
        <div class="">
            <h3>Create New Category</h3>
        </div>
        <div class="mb-2">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="category_list.php" class="text-white text-decoration-none">Category List</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')
<div class="vh-100 bg-background p-3">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card border-0 mb-4">
                <div class="card-body bg-blue">
                    <form action="add_category.php" method="post">
                        <div class="mb-4">
                            <label for="category" class="mb-2">Category Name</label>
                            <input type="text" id="category" name="category" class="form-control">
                            <small class="fw-bold text-danger"><?php echo (!empty($catErr))?"*$catErr":""; ?></small>
                        </div>
                        <button class="btn bg-button float-end">Create Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
