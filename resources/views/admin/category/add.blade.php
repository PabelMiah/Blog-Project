@extends('admin.master')

@section('title')
Add Category
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Category Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="category_image" class="form-control-file" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Category status</label>
                                <div class="col-md-8">
                                    <label for="" class="col-form-label"><input type="radio" name="status" value="1" checked>Published</label>
                                    <label for="" class="col-form-label"><input type="radio" name="status" value="0">Published</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add category" />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
