@extends('admin.master')

@section('title')
    Add About
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Add About</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-about') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Upper Description</label>
                                <div class="col-md-8">
                                    <textarea name="upper_description" id="editor" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"> Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="about_image" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">lower Description</label>
                                <div class="col-md-8">
                                    <textarea name="lower_description" id="editor" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Mission Description</label>
                                <div class="col-md-8">
                                    <textarea name="mission_description" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Mission 1</label>
                                <div class="col-md-8">
                                    <input type="text" name="mission_1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Mission 2</label>
                                <div class="col-md-8">
                                    <input type="text" name="mission_2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Mission 3</label>
                                <div class="col-md-8">
                                    <input type="text" name="mission_3" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add About" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
