@extends('admin.master')

@section('title')
    Add Blog
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Blog</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="blog_title" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Category Name</label>
                                <div class="col-md-8">
                                    <select name="category_id" class="form-control">
                                        <option value="" disabled selected><---------- Select a category ----------></option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="blog_image" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Description</label>
                                <div class="col-md-8">
                                    <textarea name="blog_description" id="editor" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Status</label>
                                <div class="col-md-8">
                                    <label class="col-form-label" for=""><input type="radio" name="status" value="1" checked> Published</label>
                                    <label class="col-form-label" for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add Blog" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
