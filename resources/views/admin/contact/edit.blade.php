@extends('admin.master')

@section('title')
    Edit Contact
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Contact</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-contact',['id'=>$contact->id]) }}" method="post" >
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Contact Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="editor" class="form-control" cols="" rows="">{{ $contact->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="{{ $contact->email }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" class="form-control" cols="" rows="">{{ $contact->address }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Update Contact" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
