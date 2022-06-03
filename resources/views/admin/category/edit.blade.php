@extends('admin.master')

@section('title')
    Edit Category
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-category', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Category Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="category_image" class="form-control-file" />
                                    <img src="{{ asset($category->category_image) }}" style="height: 100px; width: 100px;" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Category status</label>
                                <div class="col-md-8">
                                    <label for="" class="col-form-label"><input type="radio" name="status" {{ $category->status == 1 ? 'checked' : '' }} value="1" >Published</label>
                                    <label for="" class="col-form-label"><input type="radio" name="status" {{ $category->status == 0 ? 'checked' : '' }} value="0">Published</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Update category" />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
