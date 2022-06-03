@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Category</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <img src="{{ asset($category->category_image) }}" style="height: 100px; width: 100px;" alt="">
                                    </td>
                                    <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-category', ['id' => $category->id, 'title' => str_replace(' ', '-', $category->category_name)]) }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('delete-category',['id' => $category->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
